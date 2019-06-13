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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/' , function() {
	return "Hola Juan desde la pagina de inicio";
Route::get('contacto' , function() {
	return "Hola Juan desde la pagina de Contacto";
});
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Saludos " . $nombre;
});
Route::get('numero/{dame?}', function($dame ="51"){
		return "El número es " . $dame;
});

