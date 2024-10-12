<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class,'index'])->name('home');

//Artistas
Route::get('/artistas', [ArtistaController::class,'index'])->name('artistas.index');
Route::get('/artistas/create', [ArtistaController::class,'create'])->name('artistas.create');
Route::post('/artistas', [ArtistaController::class,'store'])->name('artistas.store');
Route::get('/artistas{artista}', [ArtistaController::class,'show'])->name('artistas.show');
Route::get('/artistas/{artista}/edit', [ArtistaController::class,'edit'])->name('artistas.edit');
Route::put('/artistas/{artista}', [ArtistaController::class,'update'])->name('artistas.update');
Route::delete('/artistas/{artista}', [ArtistaController::class,'destroy'])->name('artistas.destroy');

//Gêneros
Route::get('/generos', [GeneroController::class,'index'])->name('generos.index');
Route::get('/generos/create', [GeneroController::class,'create'])->name('generos.create');
Route::post('/generos', [GeneroController::class,'store'])->name('generos.store');
Route::get('/generos{genero}', [GeneroController::class,'show'])->name('generos.show');
Route::get('/generos/{genero}/edit', [GeneroController::class,'edit'])->name('generos.edit');
Route::put('/generos/{genero}', [GeneroController::class,'update'])->name('generos.update');
Route::delete('/generos/{genero}', [GeneroController::class,'destroy'])->name('generos.destroy');

//Álbuns
Route::get('/albuns', [AlbumController::class,'index'])->name('albuns.index');
Route::get('/albuns/create', [AlbumController::class,'create'])->name('albuns.create');
Route::post('/albuns', [AlbumController::class,'store'])->name('albuns.store');
Route::get('/albuns{album}', [AlbumController::class,'show'])->name('albuns.show');
Route::get('/albuns/{album}/edit', [AlbumController::class,'edit'])->name('albuns.edit');
Route::put('/albuns/{album}', [AlbumController::class,'update'])->name('albuns.update');
Route::delete('/albuns/{album}', [AlbumController::class,'destroy'])->name('albuns.destroy');

//Músicas
Route::get('/musicas', [MusicaController::class,'index'])->name('musicas.index');
Route::get('/musicas/create', [MusicaController::class,'create'])->name('musicas.create');
Route::post('/musicas', [MusicaController::class,'store'])->name('musicas.store');
Route::get('/musicas{musica}', [MusicaController::class,'show'])->name('musicas.show');
Route::get('/musicas/{musica}/edit', [MusicaController::class,'edit'])->name('musicas.edit');
Route::put('/musicas/{musica}', [MusicaController::class,'update'])->name('musicas.update');
Route::delete('/musicas/{musica}', [MusicaController::class,'destroy'])->name('musicas.destroy');

//Sistema Login
Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');
Route::post('/users', [UserController::class,'store'])->name('users.store');
Route::get('/users{user}', [UserController::class,'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');
