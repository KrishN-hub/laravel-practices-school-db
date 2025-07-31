<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassnameController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;



Route::resource('classes', ClassnameController::class);
Route::resource('staffs', StaffController::class);
Route::resource('students',StudentController::class);