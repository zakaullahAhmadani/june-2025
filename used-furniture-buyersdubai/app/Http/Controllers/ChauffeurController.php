<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChauffeurController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Process the data (example: store in database)
        // You can replace this with your actual logic
        // $chauffeurRequest = YourModel::create($request->all());
        
        // Or send email notification
//         Mail::to('info@used-furniture-buyersdubai.com

// ')->send(new ChauffeurRequestMail($request->all()));

        return response()->json([
            'success' => true,
            'message' => 'Your request has been submitted successfully! We will contact you soon.'
        ]);
    }
}