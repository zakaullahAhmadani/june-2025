<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form
        $request->validate([
            'form_fields.name' => 'required',
            'form_fields.email' => 'required',
            'form_fields.message' => 'required',
        ]);

        // You can save to DB or send email here
        // For demo: Just return back with a success session
        return redirect()->back()->with('success', 'Your message was sent successfully!');
    }
}
