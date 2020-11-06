<?php

use Illuminate\Support\Facades\Route;

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
//RUTA /
Route::get('/', function () {
    return view('principal');
});
//RUTA / HISTORIA
Route::get('hotel/historia', function () {
    return view('hotel.historia');
});
//RUTA / MISION
Route::get('hotel/mision-vision', function () {
    return view('hotel.vision');
});
//RUTA / UBICACION
Route::get('hotel/ubicación', function () {
    return view('hotel.ubicacion');
});
//RUTA / HABITACIONES
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
//RUTA / EVENTOS
Route::get('servicios/eventos/{$id}', function () {
    return view('servicios.eventos', array('id' => $id));
});
//RUTA / RESERVAS
Route::get('reservas', function () {
    return view('reservas.reservas');
});
//RUTA / CONTACTOS
Route::get('contactos', function () {
    return view('contactos');
});

