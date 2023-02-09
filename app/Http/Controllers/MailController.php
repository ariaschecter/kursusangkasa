<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailer;
use App\Models\User;
use Mail;

class MailController extends Controller
{
    public function index() {
        $title = 'Custom Mail';
        return view('admin.mail.index', compact('title'));
    }

    public function user() {
        $users = User::orderBy('email', 'ASC')->get();
        $title = 'User Mail';
        return view('admin.mail.user', compact('users', 'title'));
    }

    public function broadcast() {
        $title = 'Broadcast Mail';
        return view('admin.mail.broadcast', compact('title'));
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $email = $request->email;
        $subject = $request->subject;
        $body = $request->message;

        $mailer = new Mailer($body, $subject);

        Mail::to($email)->send($mailer);

        $notification = [
            'message' => 'Email Sent Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function store_broadcast(Request $request) {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);
        $body = $request->message;
        $subject = $request->subject;

        $users = User::all();

        $mailer = new Mailer($body, $subject);

        foreach ($users as $user) {
            Mail::to($user->email)->send($mailer);
        }

        $notification = [
            'message' => 'Email Sent Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
