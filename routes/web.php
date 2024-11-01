<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('portfolio', [HomeController::class, 'projects'])->name('portfolio');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact-submit', [HomeController::class, 'contact'])->name('contact-submit');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::prefix('service')->group(function () {
  Route::get('web-design', [PageController::class, 'webDesign'])->name('web-design');
  Route::get('web-dev', [PageController::class, 'webDev'])->name('web-development');
  Route::get('chat-gpt', [PageController::class, 'chatGpt'])->name('chatgpt');
  Route::get('wordpress-dev', [PageController::class, 'WPDev'])->name('wordpress-development');
  Route::get('desktop-dev', [PageController::class, 'desktopDev'])->name('desktop-development');
  Route::get('laravel-dev', [PageController::class, 'laravelDev'])->name('laravel-development');
});

Route::get('terms', [PageController::class, 'terms'])->name('terms');
