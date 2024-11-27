<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'message' => 'required',
        ]);

        // Send email with form data
        Mail::to('exampleproject2002@gmail.com')->send(new SendMail($request->all()));

        return back()->with('success', 'Message sent successfully!');
    }
}
