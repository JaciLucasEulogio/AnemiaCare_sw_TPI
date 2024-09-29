<?php

use App\Models\Apoderado;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApoderadoController;
use App\Http\Controllers\ApoderadoLoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DosajeController;

// Guests 
Route::get('', [GuestController::class, 'home'])->name('guest.home');
Route::get('home', [GuestController::class, 'home'])->name('guest.home');
Route::get('sobre-nosotros', [GuestController::class, 'aboutUs'])->name('guest.aboutUs');
Route::get('como-usar', [GuestController::class, 'howToUse'])->name('guest.howToUse');
Route::get('ingresar-como-doctor', [GuestController::class, 'loginDoctor'])->name('guest.loginDoctor');
Route::get('registrarse', [GuestController::class, 'register'])->name('guest.register');
Route::post('storeApoderado', [ApoderadoLoginController::class, 'store'])->name('apoderados.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Doctores
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('home', [DoctorController::class, 'home'])->name('doctores.home');
});

// Apoderados
Route::middleware('auth:apoderados')->group(function () {
    Route::get('apoderados-inicio', [ApoderadoController::class, 'home'])->name('apoderados.home');
    Route::get('apoderados-predicciones', [ApoderadoController::class, 'prediction'])->name('apoderados.prediction');
    Route::post('apoderados-storeDosajes', [DosajeController::class, 'store'])->name('dosajes.store');
});

// Rutas de autenticación
require __DIR__.'/auth.php';
