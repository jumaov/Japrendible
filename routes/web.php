<?php
/*Aqui le cambiamos el idioma a la app*/
 App::setLocale('es');

Route::view('/' , 'home')->name('home');
Route::view('/about' , 'about')->name('about');
/*Route::view('/portfolio' , 'portfolio', compact('portfolio'))->name('portfolio');*/
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::view('/contact' , 'contact')->name('contact');
Route::post('contact', 'MessagesController@store');
/*con la proxima linea se generan todos los métodos  del controlador*/
/*Route::resource('proyectos', ('PortfolioController'));*/