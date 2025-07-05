<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services Page
Route::get('/services', [HomeController::class, 'services'])->name('services');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('contact.ratelimit')
    ->name('contact.store');

// Developer Page
Route::get('/developer', [HomeController::class, 'developer'])->name('developer');
