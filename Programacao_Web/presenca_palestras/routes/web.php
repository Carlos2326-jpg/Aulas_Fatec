<?php

use App\Http\Controllers\DuplaController;

Route::get('/dupla', [DuplaController::class, 'dupla'])->name('dupla');
