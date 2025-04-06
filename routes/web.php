<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProdukController::class, 'index']);

Route::get('/keranjang', [ProdukController::class, 'keranjang']);

Route::post('/tambah-ke-keranjang', [ProdukController::class, 'tambah']);

Route::get('/checkout', [CheckoutController::class, 'form']);

Route::post('/checkout', [CheckoutController::class, 'proses']);
