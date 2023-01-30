<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function envelope()
    {
        return new Envelope(
            subject: 'Welcome Mail',
        );
    }


    public function content()
    {
        return new Content(
            markdown: 'emails.welcomeMail',
        );
    }


    public function attachments()
    {
        return [];
    }
}
