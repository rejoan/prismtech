<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('portfolio', [HomeController::class, 'projects'])->name('portfolio');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');