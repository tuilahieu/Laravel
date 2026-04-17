<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;


use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;

// CLIENT
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);


// nhóm admin
Route::prefix('admin')->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'update']);
    Route::resource('vouchers', VoucherController::class);
    Route::resource('users', UserController::class);
});
