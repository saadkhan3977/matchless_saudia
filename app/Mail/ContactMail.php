<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $objDemo;

    public function __construct($objDemo)
    {
        $this->objDemo  = $objDemo;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contactMail')
        ->from($this->objDemo->email, $this->objDemo->fullname)
                    ->subject($this->objDemo->subject)
                    ->with([ 'name' => $this->objDemo->fullname ]);
    }
}
