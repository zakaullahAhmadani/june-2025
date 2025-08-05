<?php

namespace App\Http\Controllers;
use App\Models\ChauffeurRequest;

use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function submit(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'subject' => 'required',
            'message' => 'nullable|string',
        ]);

        // Example: store in DB (optional)
        // ChauffeurRequest::create($validated);

        // Here we’d typically send email or store data.
        // For this example, we’ll just redirect back with success.
        ChauffeurRequest::create($validated);


        return redirect()->back()->with('success', 'Your request has been submitted successfully!');
    }
}
