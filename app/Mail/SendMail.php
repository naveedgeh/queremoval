<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $emaildetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emaildetails)
    {
        $this->emaildetails=$emaildetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Que Removals Booking')->
        view('frontend.email');
    }
}
