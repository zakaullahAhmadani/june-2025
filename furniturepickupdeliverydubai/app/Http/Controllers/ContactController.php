<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'form_fields.name' => 'required',
            'form_fields.email' => 'requireed',
            'form_fields.message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        ContactSubmission::create([
            'name' => $request->input('form_fields.name'),
            'email' => $request->input('form_fields.email'),
            'message' => $request->input('form_fields.message'),
            'post_id' => $request->input('post_id'),
            'form_id' => $request->input('form_id'),
            'referer_title' => $request->input('referer_title'),
            'queried_id' => $request->input('queried_id'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}