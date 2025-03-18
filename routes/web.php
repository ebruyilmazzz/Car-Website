<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/car-list', [CarController::class, 'index'])->name('car.list');
Route::get('/car-list/{id}', [CarController::class, 'show'])->name('car.details');

Route::get('/about', function () {  
    return view('about');   });

Route::get('/contact', function () {  
    return view('contact'); });
Route::post('/contact-submit', [ContactController::class, 'submit']);