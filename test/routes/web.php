<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;




Route::resource('students', StudentController::class);


Route::get('/', function () {
    return view('welcome');
});
