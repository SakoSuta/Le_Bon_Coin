<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckedAnnonce extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build():CheckedAnnonce
    {
        $token = $this->data['token'];

        return $this->view('emails.checked')->with(['token' => $token,]);
    }
}
