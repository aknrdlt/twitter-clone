<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send() {
        $demo = new \stdClass();
        $demo -> receiver = 'Aknurdaulet';
        $demo -> sender = 'Aknurdaulet Sarkytbayev';
        Mail::to('190103438@stu.sdu.edu.kz')->send(new DemoMail($demo));
    }
}