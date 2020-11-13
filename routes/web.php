<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get("/password/reset", [App\Http\Controllers\Auth\ResetPasswordController::class, "index"]);

// Route::middleware("auth")->group(
// function () {
Route::get('/', [App\Http\Controllers\App\AppController::class, 'index'])->name('app');
    // }
// );
