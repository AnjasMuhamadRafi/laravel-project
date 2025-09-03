<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_sends_email_and_shows_success_alert()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        Mail::fake();

        $response = $this->post('/contact/send', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'phone' => '08123456789',
            'company' => 'Test Company',
            'service' => 'recruitment',
            'message' => 'Ini pesan test.'
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Message sent successfully!');

        Mail::assertSent(\App\Mail\ContactMessageMail::class, function ($mail) {
            return $mail->hasTo('anjas5rafi45@gmail.com');
        });
    }
}
