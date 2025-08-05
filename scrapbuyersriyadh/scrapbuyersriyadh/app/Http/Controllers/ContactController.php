<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact'); // contact.blade.php
    }

    public function submit(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name'    => 'required',
            'email'   => 'required|',
            'comment' => 'required|',
        ]);

        // You can process the data here:
        // For example, you can save it to the database or send an email

        // Just returning success message for now
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
