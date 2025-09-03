<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $resumePath;
    public $originalName;

    public function __construct($data, $resumePath, $originalName = null)
    {
        $this->data = $data;
        $this->resumePath = $resumePath;
        $this->originalName = $originalName;
    }

    public function build()
    {
        $subject = 'Lamaran dari ' . ($this->data['fullName'] ?? '-') . ' (' . ($this->data['email'] ?? '-') . ')';
        if (!empty($this->data['position'])) {
            $subject .= ' - ' . $this->data['position'];
        }
        $email = $this->subject($subject)
            ->view('emails.job_application')
            ->with(['data' => $this->data]);

        // Attach resume file dengan nama asli
        if ($this->resumePath) {
            $email->attach(Storage::path($this->resumePath), [
                'as' => $this->originalName ?? basename($this->resumePath)
            ]);
        }

        return $email;
    }
}
