<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class contactController extends Controller
{
    public function sendMail(Request $data)
    {


        $send = Mail::send('mailview', ['email' => $data->email, 'name' => $data->name, 'msg' => $data->message, 'phone' => $data->phone], function ($message) use ($data) {
            $message->from($data->email);
            $message->to('royaltech071@gmail.com')->subject('contact mail');
        });

        if ($send) {
            Session::flash('msg', 'somthing wrong!');
            return back();
        } else {
            Session::flash('msg', 'Message successfully sent!');
            return back();
        }
    }
}
