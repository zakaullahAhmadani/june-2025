<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function submit(Request $request)
   
{
    try {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9\s\-]+$/'],
            'service' => ['required', 'string', 'in:Tyre Repair,Tyre Change,Wheel Alignment,Other'],
            'message' => ['required', 'string', 'min:10', 'max:1000']
        ], [
            'phone.regex' => 'Please enter a valid phone number',
            'service.in' => 'Please select a valid service type'
        ]);

        Mail::to('info@tyrerepairandchange.shop')
            ->send(new ContactFormSubmission($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will contact you soon.'
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error submitting form: ' . $e->getMessage()
        ], 500);
    }
}
}