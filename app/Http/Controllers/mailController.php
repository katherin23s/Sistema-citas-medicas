<?php

namespace App\Http\Controllers;

use App\Classes\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationDate;
use App\Mail\ContactInfoMail;
use App\Mail\contactmail;

class mailController extends Controller
{
    public function contactmail(Request $request)
    {

        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'msg' => 'required',
        ]);

        $email = $request->input('email');

        $contact = new Contact();
        $contact->email =  $data['email'];
        $contact->msg = $data['msg'];
        $contact->subject =  $data['subject'];
        $contact->nombre = $data['nombre'];

        Mail::to($email)->send(new ContactInfoMail($contact));
        if (Mail::failures()) {
            echo "Email not send";
        } else {
            echo "Email has been sent";
        }
    }
}