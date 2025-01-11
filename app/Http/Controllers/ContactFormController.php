<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    function post_message(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $data = [
            'name' => $request -> name,
            'email' => $request -> email,
            'subject' => $request -> subject,
            'message' => $request -> message,
        ];

        Mail::to('pasramandsk@gmail.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('msg', 'Thank You For Your Message');
    }
}
