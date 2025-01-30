<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DominioController;
use App\Http\Controllers\RelatorioController;

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

    /*HOME*/
    Route::get('/home', function () {return view('home');})->name('home');

    /*DOMINIOS*/
    Route::get('/dominio', [DominioController::class, 'index'])->name('dominio');
    Route::get('/dominio/create', [DominioController::class, 'create'])->name('dominio.create');
    Route::post('/dominio/adicionar', [DominioController::class, 'store'])->name('dominio.adicionar');

    /*RELATORIOS*/
    Route::get('/relatorio', [RelatorioController::class, 'index'])->name('relatorio');
    Route::get('/relatorio1', [RelatorioController::class, 'relatorio1'])->name('relatorio1');
    Route::get('/relatorio2', [RelatorioController::class, 'relatorio2'])->name('relatorio2');
    Route::get('/relatorio3', [RelatorioController::class, 'relatorio3'])->name('relatorio3');
});

require __DIR__.'/auth.php';
