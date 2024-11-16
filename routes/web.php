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
  Route::get('e-commerce', [PageController::class, 'eCommerce'])->name('e-commerce');
  Route::get('business-automation', [PageController::class, 'businessAutomation'])->name('business-automation');
  Route::get('cloud-services', [PageController::class, 'cloudServices'])->name('cloud-services');
  Route::get('data-analytics', [PageController::class, 'dataAnalytics'])->name('data-analytics');
  Route::get('data-mining', [PageController::class, 'dataMining'])->name('data-mining');
  Route::get('healthcare-solutions', [PageController::class, 'healthcareSolutions'])->name('healthcare-solutions');
  Route::get('software-security', [PageController::class, 'softwareSecurity'])->name('software-security');
  Route::get('data-security', [PageController::class, 'dataSecurity'])->name('data-security');
  Route::get('custom-development', [PageController::class, 'customDevelopment'])->name('custom-development');
  Route::get('ai-solutions', [PageController::class, 'aiSolutions'])->name('ai-solutions');
  Route::get('software-maintenance', [PageController::class, 'softwareMaintenance'])->name('software-maintenance');
  Route::get('dev-ops', [PageController::class, 'devOps'])->name('dev-ops');
  Route::get('mobile-app', [PageController::class, 'mobileApp'])->name('mobile-app');
  
  Route::get('web-design', [PageController::class, 'webDesign'])->name('web-design');
  Route::get('web-dev', [PageController::class, 'webDev'])->name('web-development');
  Route::get('chat-gpt', [PageController::class, 'chatGpt'])->name('chatgpt');
  Route::get('wordpress-dev', [PageController::class, 'WPDev'])->name('wordpress-development');
  Route::get('desktop-dev', [PageController::class, 'desktopDev'])->name('desktop-development');
  Route::get('laravel-dev', [PageController::class, 'laravelDev'])->name('laravel-development');
});

Route::get('terms', [PageController::class, 'terms'])->name('terms');
