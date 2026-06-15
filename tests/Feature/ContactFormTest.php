<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_sends_a_mail(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Test Bezoeker',
            'email' => 'bezoeker@example.com',
            'subject' => 'Dier in nood',
            'message' => 'Er zit een gewonde vogel in onze tuin.',
        ];

        $this->post('/contact', $payload)
            ->assertRedirect()
            ->assertSessionHas('status');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail) {
            return $mail->payload['email'] === 'bezoeker@example.com'
                && $mail->payload['subject'] === 'Dier in nood';
        });
    }

    public function test_contact_form_validates_required_fields(): void
    {
        Mail::fake();

        $this->post('/contact', [])
            ->assertSessionHasErrors(['name', 'email', 'subject', 'message']);

        Mail::assertNothingSent();
    }

    public function test_contact_form_blocks_honeypot_submissions(): void
    {
        Mail::fake();

        $this->post('/contact', [
            'name' => 'Spam',
            'email' => 'spam@example.com',
            'subject' => 'Andere vraag',
            'message' => 'Dit bericht lijkt geldig maar vult de honeypot.',
            'website' => 'https://example.com',
        ])->assertSessionHasErrors(['website']);

        Mail::assertNothingSent();
    }

    public function test_contact_form_is_rate_limited(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Test Bezoeker',
            'email' => 'bezoeker@example.com',
            'subject' => 'Andere vraag',
            'message' => 'Een voldoende lang bericht voor de validatie.',
        ];

        for ($attempt = 0; $attempt < 3; $attempt++) {
            $this->post('/contact', $payload)->assertRedirect();
        }

        $this->post('/contact', $payload)->assertTooManyRequests();
    }
}
