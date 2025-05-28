<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\User;

class BinaryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $otp;

    public function __construct(User $user, $otp)
    {
        $this->user = $user;
        $this->otp = $otp;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Binary Mail',
        );
    }

    // 🔥 INI content-nya, TAMBAH 'otp'
    public function content(): Content
    {
        return new Content(
            view: 'view.mail',
            with: [
                'user' => $this->user,
                'otp' => $this->otp, 
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
