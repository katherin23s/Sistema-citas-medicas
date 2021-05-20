<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationDate;
use App\Mail\contactmail;

class mailController extends Controller
{
    public function contactmail(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $email = $request->input('email');


        Mail::to($email)->send(new contactmail($data));
        if (Mail::failures()) {
            echo "Email not send";
        } else {
            echo "Email has been sent";
        }
    }
}