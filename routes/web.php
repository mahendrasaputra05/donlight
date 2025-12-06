<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/product/{id}', [DashboardController::class, 'productDetail'])->name('dashboard.product-detail');
Route::get('/dashboard/orders', [DashboardController::class, 'orderReport'])->name('dashboard.order-report');

Route::get('/', function () {
    return view('welcome');
});
