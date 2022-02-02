<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', 'HomeController@index') -> name('index');
Route::get('/', function () {
    return view('new.pages.index');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
