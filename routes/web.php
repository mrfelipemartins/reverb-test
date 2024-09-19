<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\TestController::class);

Route::get('/reverb', function() {
    return view('reverb');
})->name('reverb')->middleware('auth');
