<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        // Example: save to DB (optional)
        // NewsletterSubscriber::create(['email' => $validated['email']]);

        // Or send email logic here if you prefer

        return back()->with('success', 'Thanks for subscribing!');
    }
}
