<?php

namespace App\Mail;

use App\Models\reunion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class reunionMail extends Mailable
{
    use Queueable, SerializesModels;
    public $reunion;
    public $projet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(reunion $reunion,$projet)
    {
      $this->reunion=$reunion;
      $this->projet=$projet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('unipro@gmail.com')
                    ->subject('réunion planifié')
                    ->view('email.infoReunion');
    }
}
