<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistaController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/artistas', [ArtistaController::class,'index'])->name('artistas.index');
Route::get('/artistas/create', [ArtistaController::class,'create'])->name('artistas.create');
Route::post('/artistas', [ArtistaController::class,'store'])->name('artistas.store');
Route::get('/artistas{artista}', [ArtistaController::class,'show'])->name('artistas.show');
Route::get('/artistas/{artista}/edit', [ArtistaController::class,'edit'])->name('artistas.edit');
Route::put('/artistas/{artista}', [ArtistaController::class,'update'])->name('artistas.update');
Route::delete('/artistas/{artista}', [ArtistaController::class,'destroy'])->name('artistas.destroy');