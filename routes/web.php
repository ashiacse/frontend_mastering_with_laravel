<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;

Route::get('/',[HomeController::class,'homepage'])->name('home');

