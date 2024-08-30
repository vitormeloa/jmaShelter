<?php

use App\Http\Controllers\AcompanhamentoController;
use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdotanteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('animais', AnimalController::class);
Route::resource('adotantes', AdotanteController::class);
Route::resource('adocoes', AdocaoController::class);
Route::resource('acompanhamentos', AcompanhamentoController::class);
