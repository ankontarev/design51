<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Mail Einbinden
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $formData = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'message' => $request->message,
        ];

       // dd($formData);

        $contactMail = "info@ddesign51.de";
        Mail::to($contactMail)->send(new Contact($formData)); 

        return redirect()->route('contact.thx');
    }

    public function thxContact()
    {
        return view('home.contact.thxContact');
    }
}
