<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

//ApplicantCOnroller@index

Route::get('/registration', [App\Http\Controllers\ApplicantController::class, 'index'])->name('registration.index');
Route::post('/registration', [App\Http\Controllers\ApplicantController::class, 'store'])->name('registration.store');

