<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CareerApplyValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_career_apply_requires_all_fields()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        $response = $this->post('/career/apply', []);
        $response->assertSessionHasErrors(['fullName', 'email', 'phone', 'coverLetter', 'resume']);
    }
}
