<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detailts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detailts)
    {
        $this->detailts = $detailts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->detailts['email'])->subject('Mensaje de contacto')->view('emails.contact');
    }
}
