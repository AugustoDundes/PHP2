<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\RotaController;


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
    Route::resource('veiculo', VeiculoController::class);
    Route::resource('motorista', MotoristaController::class);
    Route::resource('rota', RotaController::class);
});

require __DIR__.'/auth.php';
