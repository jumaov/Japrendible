<?php


Route::view('/' , 'home')->name('home');
Route::view('/about' , 'about')->name('about');
/*Route::view('/portfolio' , 'portfolio', compact('portfolio'))->name('portfolio');*/
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::view('/contact' , 'contact')->name('contact');
/*Route::resource('portflio', ('PortfolioController'));*/