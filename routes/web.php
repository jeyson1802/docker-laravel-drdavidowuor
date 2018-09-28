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

Route::get('/hotelesdrowuorperu', function () {
    return view('hotels');
});

Route::get('/transportedrowuorperu', function () {
    return view('hotels');
});

Route::get('/registroconferencia', function () {
    return view('registroconferencia');
});

Route::get('/registrocruzada', function () {
    return view('registrocruzada');
});

Route::resource('invitado', 'InvitadoController');