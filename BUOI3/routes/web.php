<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;

Route::resource('employees', EmployeeController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
