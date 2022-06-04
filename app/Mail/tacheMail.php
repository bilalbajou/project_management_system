<?php

namespace App\Mail;

use App\Models\projet;
use App\Models\tache;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class tacheMail extends Mailable
{ 
    public $tache;
    public $projet;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(tache $tache,$projet)
    {
        $this->tache=$tache;
        $this->projet=$projet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Affectation')
                    ->from('unipro@gmail.com')
                    ->view('email.infoTache');
    }
}
