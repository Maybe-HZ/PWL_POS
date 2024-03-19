<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    // return view('welcome');
    // JS 6 A bagian 3
    // return view('welcomejs6');
    // JS 6 A bagian 7
    return view('welcomejs6a');
});


// Jobsheet 3 Praktikum 4 bagian 2
Route::get('/level', [LevelController::class, 'index']) ->name('level');
// JS 6 A bagian 9
Route::get('/level/tambah', [LevelController::class, 'create']) ->name('level.create');
Route::post('/level', [LevelController::class, 'store']) ->name('level.store');
Route::get('/level/edit/{id}', [LevelController::class, 'edit']) ->name('level.edit');
Route::put('/level/update/{id}', [LevelController::class, 'update']) ->name('level.update');
Route::get('/level/delete/{id}', [LevelController::class, 'delete']) ->name('level.delete');


// Jobsheet 3 Praktikum 5 bagian 2
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
// Jobsheet 5 praktikum 2 bagian 1
Route::get('/kategori/tambah',[KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori',[KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.delete');

// Jobsheet 3 Praktikum 6 bagian 4
Route::get('/user', [UserController::class, 'index'])->name('user');
// jobsheet 4 praktikum 2.6 bagian 1
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');
// Jobsheet 4 praktikum 2.6 bagian 9
Route::post('user/tambah_simpan',[UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
// Jobsheet 4 praktikum 2.6 bagian 15
Route::put('user/ubah_simpan/{id}',[UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');


