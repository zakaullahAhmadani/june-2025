<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required',
            'email'    => 'required|email',
            'phone'    => 'nullable',
            'subject'  => 'required',
            'message'  => 'required',
        ]);

        // Send email
        // Mail::to('info@innovative-technologies.net')->send(
        //     new ContactMail($validated)
        // );

        return back()->with('success', 'Your message has been sent!');
    }
}
