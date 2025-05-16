<?php

use App\Http\Controllers\KasirController;

Route::resource('kasir', KasirController::class);

Route::get('/', function () {
    return view('home');
});
