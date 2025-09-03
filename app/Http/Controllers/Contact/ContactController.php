<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class ContactController extends Controller
{
    public function contact(){
        return view('Pages.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:30',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email menggunakan mailable
        Mail::to('trio@enlulu.co.id')->send(
            (new ContactMessageMail($validated))
                ->replyTo($validated['email'], $validated['name'])
        );

        return back()->with('success', 'Message sent successfully!');
    }
}
