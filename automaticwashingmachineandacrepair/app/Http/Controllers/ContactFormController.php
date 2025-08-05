<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validate the request data for Arabic form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ], [
            'name.required' => 'حقل الاسم مطلوب',
            'phone.required' => 'حقل الهاتف مطلوب',
            'email.email' => 'البريد الإلكتروني يجب أن يكون صالحاً',
            'service.required' => 'حقل الخدمة مطلوب',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('form_error', 'ar'); // Identify Arabic form errors
        }

        // Process the form data
        $formData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
            'language' => 'ar', // Indicate Arabic form submission
            'ip_address' => $request->ip(),
        ];

        // Save to database if needed (uncomment to use)
        // $contact = \App\Models\Contact::create($formData);

        // Send email notification
        try {
            Mail::to('info@yourdomain.com')->send(new ContactFormSubmission($formData));
            
            return redirect()->back()
                ->with('success', 'تم إرسال رسالتك بنجاح. شكراً لتواصلك معنا!')
                ->with('form_success', 'ar');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى لاحقاً.')
                ->with('form_error', 'ar')
                ->withInput();
        }
    }
}