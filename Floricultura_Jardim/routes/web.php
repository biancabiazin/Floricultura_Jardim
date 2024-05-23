<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/plantas', function () {
    return view('plantas');
});
