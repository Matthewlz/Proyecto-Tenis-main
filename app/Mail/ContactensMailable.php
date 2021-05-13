<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactensMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="informació de contacte";
    public $contacte;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacte){
        $this->contacte = $contacte;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactens');
    }
}
