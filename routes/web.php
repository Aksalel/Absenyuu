<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigmaskibidiController;

Route::get('/', function () {
    return view('userLogin');
});
Route::get('about', function () {
    return view('aboutUs');
});
Route::get('home', function () {
    return view('home');
});

Route::resource('users', SigmaskibidiController::class);
Route::get('/users', [
    \App\Http\Controller\SigmaskibidiController::class, 'index'
]);

Route::get('absen', [SigmaskibidiController::class, 'index'] )->name('absen');

Route::get('create', [SigmaskibidiController::class, 'create']);

Route::post('/create', [SigmaskibidiController::class, 'store']);

Route::post('/absen', [SigmaskibidiController::class, 'destroy']);