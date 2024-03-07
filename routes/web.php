<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});


// Jobsheet 3 Praktikum 4 bagian 2
Route::get('/level', [LevelController::class, 'index']);
// Jobsheet 3 Praktikum 5 bagian 2
Route::get('/kategori', [KategoriController::class, 'index']);
// Jobsheet 3 Praktikum 6 bagian 4
Route::get('/user', [UserController::class, 'index'])->name('/user');

// jobsheet 4 praktikum 2.6 bagian 1
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

// Jobsheet 4 praktikum 2.6 bagian 9
Route::post('user/tambah_simpan',[UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');

// Jobsheet 4 praktikum 2.6 bagian 15
Route::put('user/ubah_simpan/{id}',[UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');


