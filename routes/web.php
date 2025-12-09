<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/product/{id}', [DashboardController::class, 'productDetail'])->name('dashboard.product-detail');
Route::get('/dashboard/customers', [DashboardController::class, 'customers'])->name('dashboard.customers');
Route::get('/dashboard/orders', [DashboardController::class, 'orders'])->name('dashboard.orders');
Route::get('/dashboard/sales-stats', [DashboardController::class, 'salesStats'])->name('dashboard.sales-stats');

Route::get('/', function () {
    return view('home');   // akan memanggil resources/views/home.blade.php
});
