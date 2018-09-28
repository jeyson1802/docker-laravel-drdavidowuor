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

Route::get('/contactotbjoshuaperu', function () {
    return view('contact');
});

Route::get('/tbjoshuaperu', function () {
    return view('tbjoshua');
});

Route::get('/preguntastbjoshua', function () {
    return view('questions');
});

Route::get('/programaciontbjoshuaperu', function () {
    return view('programmer');
});

Route::get('/conferenciadepastorestbjoshuaperu', function () {
    return view('conference');
});

Route::get('/hotelestbjoshuaperu', function () {
    return view('hotels');
});

Route::get('/transportetbjoshuaperu', function () {
    return view('hotels');
});

Route::get('/registroconferencia', function () {
    return view('registroconferencia');
});

Route::get('/registrocruzada', function () {
    return view('registrocruzada');
});

Route::resource('invitado', 'InvitadoController');