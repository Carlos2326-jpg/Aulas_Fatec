<?php

use App\Http\Controllers\PalestraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('palestras.index');
});

Route::resource('palestras', PalestraController::class);
