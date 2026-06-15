<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $payload) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->payload['email']],
            subject: 'Nieuw contactbericht: '.$this->payload['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contact-message');
    }

    public function attachments(): array
    {
        return [];
    }
}
