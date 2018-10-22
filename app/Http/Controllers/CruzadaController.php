<?php

namespace App\Http\Controllers;

use Mail;
use App\Cruzada;
use App\Mail\MailRegistroCruzada;
use Illuminate\Http\Request;

class CruzadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cruzadas=Cruzada::orderBy('id','DESC')->paginate(10);
        return view('listarcruzada', compact('cruzadas')); 
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
        $cruzada = new Cruzada();
        $cruzada->nombres = $request->input("nombres");
        $cruzada->apellidos = $request->input("apellidos");
        $cruzada->correo = $request->input("correo");
        $cruzada->celular = $request->input("celular");
        $cruzada->facebook = !empty($request->input("facebook")) ? $request->input("facebook") : "-";
        $cruzada->pais = !empty($request->input("pais")) ? $request->input("pais") : "-";
        $cruzada->iglesia = !empty($request->input("iglesia")) ? $request->input("iglesia") : "-";
        $cruzada->oracion = !empty($request->input("oracion")) ? $request->input("oracion") : "-";
        $cruzada->noticias = !empty($request->input("noticias")) ? $request->input("noticias") : "no";
        $cruzada->save();

        $correo = $request->input("correo");
        Mail::to($correo)->send(new MailRegistroCruzada($cruzada));

        return view('registroconexito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cruzada  $cruzada
     * @return \Illuminate\Http\Response
     */
    public function show(Cruzada $cruzada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cruzada  $cruzada
     * @return \Illuminate\Http\Response
     */
    public function edit(Cruzada $cruzada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cruzada  $cruzada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cruzada $cruzada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cruzada  $cruzada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cruzada $cruzada)
    {
        Cruzada::find($cruzada->id)->delete();
        return redirect()->route('cruzada.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
