<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmission;

class FormController extends Controller
{
    public function showForm()
    {
        return view('your-form-view');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'pickup_date' => 'required|date',
            'pickup_location' => 'required|string',
            'dropoff_date' => 'required|date',
            'dropoff_location' => 'required|string',
        ]);

        // Process the form data (save to database, send email, etc.)
        // Mail::to('your@email.com')->send(new FormSubmission($validated));

        return redirect()->back()->with([
            'success' => 'Your request has been submitted successfully!',
            'form_data' => $validated // Optional: if you want to repopulate
        ]);
    }
}