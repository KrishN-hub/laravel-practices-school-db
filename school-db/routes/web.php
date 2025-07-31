<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassnameController;



Route::resource('classes', ClassnameController::class);