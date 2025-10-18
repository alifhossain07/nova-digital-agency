<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/service', [PageController::class, 'service'])->name('service');


Route::get('/contact', [PageController::class, 'contact'])->name('contact');
