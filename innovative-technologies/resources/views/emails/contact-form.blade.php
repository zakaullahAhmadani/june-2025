<!-- resources/views/emails/contact-form.blade.php -->
@component('mail::message')
# New Contact Form Submission

**Name:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
**Phone:** {{ $contact->phone ?? 'Not provided' }}  
**Subject:** {{ $contact->subject }}  

**Message:**  
{{ $contact->message }}

@component('mail::button', ['url' => 'mailto:'.$contact->email])
Reply to {{ $contact->name }}
@endcomponent

Thanks,  
{{ config('app.name') }}
@endcomponent