<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailContacto;
use App\Mail\MailSuscription;
use App\Contacto;

class ContactoController extends Controller
{
    
    public function sendMailContacto(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombres = $request->input("nombres");
        $contacto->correo = $request->input("correo");
        $contacto->asunto = $request->input("asunto");
        $contacto->mensaje = $request->input("mensaje");

        Mail::to('contacto@arrepentimientoamericalatina.com')->send(new MailContacto($contacto));

        return view('contactoconexito');
    }

    public function sendSuscription(Request $request)
    {
        $contacto = new Contacto();
        $contacto->correo = $request->input("correo");

        Mail::to('contacto@arrepentimientoamericalatina.com')->send(new MailSuscription($contacto));

        return view('suscriptionconexito');
    }
}
