<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, "index"])->name('index');
Route::get('/about', [HomeController::class, "about"])->name('about');
Route::get('/login', [HomeController::class, "login"])->name('login');



