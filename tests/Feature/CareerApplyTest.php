<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class CareerApplyTest extends TestCase
{
    use RefreshDatabase;

    public function test_career_apply_sends_email_and_shows_success_alert()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        Mail::fake();
        $file = UploadedFile::fake()->create('cv.pdf', 100, 'application/pdf');

        $response = $this->post('/career/apply', [
            'fullName' => 'Pelamar Test',
            'email' => 'pelamar@example.com',
            'phone' => '08123456789',
            'position' => 'Lead Developer',
            'experience' => '1-3',
            'coverLetter' => 'Saya ingin melamar.',
            'resume' => $file,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Application submitted successfully!');

        Mail::assertSent(\App\Mail\JobApplicationMail::class, function ($mail) {
            return $mail->hasTo('anjas5rafi45@gmail.com');
        });
    }
}
