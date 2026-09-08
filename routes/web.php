<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ReportController   ;


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


Route::get('/login', [AuthController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 
Route::post('/login', [AuthController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});
 
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});

