<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;

// Rute untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});


// Rute untuk input usia
Route::get('/produk/input-usia', function () {
    return view('produk.input-usia');
})->name('produk.input-usia');


// Rute untuk produk
Route::get('/produk', function () {
    return view('produk.index');
})->middleware('checkage')->name('produk.index');


Route::get('/produk/detail', function () {
    return view('produk.detail');
})->middleware('checkage')->name('produk.detail');


Route::get('/produk/harga', function () {
    return view('produk.harga');
})->middleware('checkage')->name('produk.harga');

// Rute untuk data product
Route::get('/products', [ProductController::class, 'index']);

// Rute untuk data mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);