<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Conferencia;

class MailRegistroConferencia extends Mailable
{
    use Queueable, SerializesModels;

    public $conferencia;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Conferencia $conferencia)
    {
        $this->conferencia = $conferencia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registro Correcto - Conferencia')->view('mails.conferencia');
    }
}
