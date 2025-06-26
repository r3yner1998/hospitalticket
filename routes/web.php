<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\EjemploController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginBasic::class, 'index'])->name('login');

Route::get('/ejemplo', [EjemploController::class, 'index'])->name('ejemplo-view');
Route::get('/ejemplo/nuevo', [EjemploController::class, 'nuevo']);
Route::post('/ejemplo/registrar', [EjemploController::class, 'registrar']);
