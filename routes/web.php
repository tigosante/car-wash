<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware("auth")->group(function () {
    Route::get('/', [App\Http\Controllers\DashBoard\DashBoardController::class, 'index'])->name('dashBoard');
});
