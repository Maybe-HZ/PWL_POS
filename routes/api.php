<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Pengerjaan Jobsheet 10 praktikum 1 bagian 10
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('api.register');
// Pengerjaan Jobsheet 10 praktikum 2 bagian 3
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('api.login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', App\Http\Controllers\Api\LoginController::class)->name('api.user');

// Pengerjaan Jobsheet 10 praktikum 3 bagian 4
Route::post
('/logout', App\Http\Controllers\Api\LogoutController::class)->name('api.logout');
