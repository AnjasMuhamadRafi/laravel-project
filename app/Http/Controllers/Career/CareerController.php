<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Mail\JobApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function career(){
        return view('Pages.career');
    }

    public function apply(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'position' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:20',
            'coverLetter' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

    // Simpan file CV ke storage sementara dan ambil nama asli
    $resumeFile = $request->file('resume');
    $resumePath = $resumeFile->store('applications');
    $originalName = $resumeFile->getClientOriginalName();

        // Tentukan email HRD sesuai posisi
        $hrdEmails = [
            'Sales Wifi' => 'trioenlulu@gmail.com',
            'Kurir Paket' => 'yani@enlulu.co.id',

        ];
        $selectedPosition = $validated['position'] ?? null;
        $hrdEmail = $hrdEmails[$selectedPosition] ?? 'hrd@enlulu.co.id';
        Mail::to($hrdEmail)->send(
            (new JobApplicationMail($validated, $resumePath, $originalName))
                ->replyTo($validated['email'], $validated['fullName'])
        );

        return back()->with('success', 'Application submitted successfully!');
    }
}
