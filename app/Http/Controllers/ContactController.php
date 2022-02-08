<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequestedEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        //Validate the request
        $request->validate([
            'email' => 'required|string',
            'contactNow'=> 'required|boolean'
        ]);

        Mail::to('edward@rockymountainweb.design')->send(new ContactRequestedEmail);

        if(Mail::failures() != 0) {
            return redirect('/')->with('contactMessage', true);
        } else {
            return 'FAILED!!';
        }

    }
}
