<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get("/password/reset", [App\Http\Controllers\Auth\ResetPasswordController::class, "index"]);

// Route::middleware("auth")->group(
// function () {
Route::get('/', [App\Http\Controllers\App\AppController::class, 'index'])->name('app');
Route::get('/manage/user', [App\Http\Controllers\Manage\UserController::class, 'index'])->name('manage-user');
Route::get('/manage/service', [App\Http\Controllers\Manage\ServiceController::class, 'index'])->name('manage-service');
Route::get('/adm/manage/user', [App\Http\Controllers\Manage\CollaboratorController::class, 'index'])->name('manage-collaborator');
Route::get('/adm/manage/type-service', [App\Http\Controllers\mMnage\TypeServiceController::class, 'index'])->name('manage-type_service');

    // }
// );
