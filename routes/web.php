<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\home\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginBasic::class, 'index'])->name('login');
