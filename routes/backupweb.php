<?php

use App\Http\Controllers\DominioController;
use App\Http\Controllers\RelatorioController;
use Illuminate\Support\Facades\Route;

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
