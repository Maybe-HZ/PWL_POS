<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;



Route::get('/', function () {
    return view('welcome');
});


// Jobsheet 3 Praktikum 4 bagian 2
Route::get('/level', [LevelController::class, 'index']);
// Jobsheet 3 Praktikum 5 bagian 2
Route::get('/kategori', [KategoriController::class, 'index']);

