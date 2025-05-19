<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('home');
});

// Route resource untuk masing-masing entitas
Route::resource('kasir', KasirController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('produk', ProdukController::class);
Route::resource('transaksi', TransaksiController::class);