<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $email;

    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function build()
    {
        return $this->subject('Password Reset Request')
                    ->view('pages.emails.reset-password')
                    ->with([
                        'resetLink' => url('/newpass?token=' . $this->token . '&email=' . $this->email)
                    ]);
    }
}
