<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// dashboard route
Route::get('/dashboard', function(){
    return view('dashboard');
});
