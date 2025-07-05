<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * buat pesan
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * ambil envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Message from ' . $this->contactData['name'] . ' - MBC Laboratory',
        );
    }

    /**
     * ambil content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'contactData' => $this->contactData,
            ],
        );
    }

    /**
     * ambil attachment
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
