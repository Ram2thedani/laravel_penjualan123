<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin']);
Route::middleware(['auth'])->group(function () {


    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/simpan', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'show']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);

    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/tambah', [BarangController::class, 'create']);
    Route::post('/barang/simpan', [BarangController::class, 'store']);
    Route::get('/barang/edit/{id}', [BarangController::class, 'show']);
    Route::post('/barang/update/{id}', [BarangController::class, 'update']);
    Route::get('/barang/hapus/{id}', [BarangController::class, 'destroy']);

    Route::get('/penjualan', [PenjualanController::class, 'index']);
    Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);

    Route::get('/penjualan/transaksi/{id}', [PenjualanController::class, 'transaksi']);
    Route::post('/penjualan/scan', [DetailPenjualanController::class, 'store']);
});
