<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassnameController;
use App\Http\Controllers\StaffController;



Route::resource('classes', ClassnameController::class);
Route::resource('staffs', StaffController::class);