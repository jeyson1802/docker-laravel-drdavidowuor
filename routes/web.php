<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contactodrowuorperu', function () {
    return view('contact');
});

Route::get('/drowuorperu', function () {
    return view('drowuor');
});

Route::get('/preguntasdrowuor', function () {
    return view('questions');
});

Route::get('/programaciondrowuorperu', function () {
    return view('programmer');
});

Route::get('/conferenciadepastoresdrowuorperu', function () {
    return view('conference');
});

Route::get('/cruzadadrowuorperu', function () {
    return view('cruzada');
});

Route::get('/registroconferencia', function () {
    return view('registroconferencia');
});

Route::get('/registrocruzada', function () {
    return view('registrocruzada');
});

Route::resource('cruzada', 'CruzadaController');
Route::resource('conferencia', 'ConferenciaController');

Route::post('sendcontacto', 'ContactoController@sendMailContacto');
Route::post('sendsuscription', 'ContactoController@sendSuscription');

