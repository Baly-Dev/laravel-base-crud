<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteManager;
use App\Http\Controllers\ComicsController;

Route::get('/', [RouteManager::class, 'home'])->name('home');
Route::get('/about-us', [RouteManager::class, 'about'])->name('about');
Route::resource('comics', ComicsController::class);

