<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $datadetail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datadetail)
    {
        $this->datadetail=$datadetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->subject("Que Removals Contact")->
        view('frontend.contactemail');
    }
}
