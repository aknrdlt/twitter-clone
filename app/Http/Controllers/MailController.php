<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send() {
        $demo = new \stdClass();
        $demo -> receiver = 'Nurlan';
        $demo -> sender = 'YoBlog Adminstration';
        $myemail = Auth::user()->email;
        Mail::to($myemail)->send(new DemoMail($demo));
    }
}