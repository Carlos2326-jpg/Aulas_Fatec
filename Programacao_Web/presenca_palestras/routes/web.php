<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicio', [App/Https/Controller/Controller::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
