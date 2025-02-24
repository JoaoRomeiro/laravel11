<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('admin/users/{user}', [UserController::class, 'show'])->name('users.show');