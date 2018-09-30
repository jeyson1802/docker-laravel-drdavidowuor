<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Cruzada;

class MailRegistroCruzada extends Mailable
{
    use Queueable, SerializesModels;

    public $cruzada;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cruzada $cruzada)
    {
        $this->cruzada = $cruzada;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registro Correcto')->view('mails.cruzada');
    }
}
