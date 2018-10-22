<?php

namespace App\Http\Controllers;

use Mail;
use App\Conferencia;
use App\Mail\MailRegistroConferencia;
use Illuminate\Http\Request;

class ConferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferencias=Conferencia::orderBy('id','DESC')->paginate(10);
        return view('listarconferencia', compact('conferencias')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conferencia = new Conferencia();
        $conferencia->nombres = $request->input("nombres");
        $conferencia->apellidos = $request->input("apellidos");
        $conferencia->correo = $request->input("correo");
        $conferencia->celular = $request->input("celular");
        $conferencia->facebook = !empty($request->input("facebook")) ? $request->input("facebook") : "-";
        $conferencia->pais = !empty($request->input("pais")) ? $request->input("pais") : "-";
        $conferencia->iglesia = !empty($request->input("iglesia")) ? $request->input("iglesia") : "-";
        $conferencia->roliglesia = !empty($request->input("roliglesia")) ? $request->input("roliglesia") : "-";
        $conferencia->noticias = !empty($request->input("noticias")) ? $request->input("noticias") : "no";
        $conferencia->save();

        $correo = $request->input("correo");
        Mail::to($correo)->send(new MailRegistroConferencia($conferencia));

        return view('registroconexito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function show(Conferencia $conferencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Conferencia $conferencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conferencia $conferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conferencia  $conferencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conferencia $conferencia)
    {
        Conferencia::find($conferencia->id)->delete();
        return redirect()->route('conferencia.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
