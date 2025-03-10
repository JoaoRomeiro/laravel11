<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('admin/users/create', [UserController::class, 'store'])->name('users.store');
Route::get('admin/users/{user}', [UserController::class, 'show'])->name('users.show');