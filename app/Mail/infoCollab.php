<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class infoCollab extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $user;
    public $pass;
    public $chef;

    public function __construct(User $user,$pass,User $chef)
    {
        $this->user=$user;
        $this->pass=$pass;
        $this->chef=$chef;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('unipro@gmail.com')
                    ->subject('Invitation de collaboration')
                     ->view('email.infoCollab');
    }
}
