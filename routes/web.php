<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Auth;

Route::get('/logout', [LoginBasic::class, 'logout']);
Route::middleware(['guest'])->group(function () {
   Route::get('/login', [LoginBasic::class, 'index'])->name('login');
   Route::post('/login', [LoginBasic::class, 'login']);
});

Route::get('/', function () {
   if (Auth::check()) {
      return redirect()->route('home');
   }
   return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
   Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::prefix('/ejemplo')->group(function () {
   Route::get('/', [EjemploController::class, 'index'])->name('ejemplo-view');
   Route::get('/nuevo', [EjemploController::class, 'nuevo']);
   Route::post('/registrar', [EjemploController::class, 'registrar']);
})->middleware(['auth']);
