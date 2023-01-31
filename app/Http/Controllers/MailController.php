<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailer;
use Mail;

class MailController extends Controller
{
    public function index() {
        return view('admin.mail.index');
    }

    public function store(Request $request) {
        $email = $request->email;

        $body = $request->message;
        $subject = $request->subject;
        $mailer = new Mailer($body, $subject);

        Mail::to($email)->send($mailer);

        $notification = [
            'message' => 'Email Sent Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
