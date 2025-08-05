<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->subject('طلب خدمة جديد - ' . $this->formData['service'])
                    ->markdown('emails.contact-form-ar') // Create this view
                    ->with(['data' => $this->formData]);
    }
}