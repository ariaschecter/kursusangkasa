<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailer;
use Mail;

class MailController extends Controller
{
    public function index() {
        $email = 'aria@gmail.com';

        $body = '<p>asdawdnwiajdniadwdw</p>';

        Mail::to($email)->send(new Mailer($body));
        return redirect()->route('home.index');
    }
}
