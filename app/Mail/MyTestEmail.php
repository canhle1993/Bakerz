<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bakerz Bite',
        );
    }

    public function build()
    {
        return $this->from('your_email@gmail.com')
                    ->subject('Tiêu đề email')
                    ->view('mail.test-email')
                    ->with('data', $this->data);
    }

    public function attachments(): array
    {
        return [];
    }
}