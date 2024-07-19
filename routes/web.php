<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// untuk dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

// untuk authentication
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register_form'])->name('register')->middleware('guest'); // ambil data dari form register
Route::post('register', [AuthController::class, 'register']); // untuk proses registrasi nya

// Route Barang
Route::resource('barang', BarangController::class)->middleware('auth');

// Route Ruangan
Route::resource('ruangan', RuanganController::class)->middleware('auth');