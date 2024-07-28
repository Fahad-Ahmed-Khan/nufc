<?php

use Illuminate\Support\Facades\Route;
use App\Models\Applicant;

Route::get('/', function () {
    return view('home');
})->name('home');

//ApplicantCOnroller@index

Route::get('/registration', [App\Http\Controllers\ApplicantController::class, 'index'])->name('registration.index');
Route::post('/registration', [App\Http\Controllers\ApplicantController::class, 'store'])->name('registration.store');


Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/admin', function () {
    $applicants = Applicant::distinct('name')->get();
    return view('admin.layout.app', compact('applicants'));
})->name('admin.login');