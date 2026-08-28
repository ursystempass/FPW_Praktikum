<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/about', function () {
    return 'Selamat datang di app POS';
});

Route::get('/produk', function () {
    return 'Daftar Produk';
});

Route::post('/supplier', function () {
    return 'Data supplier berhasil disimpan';
});