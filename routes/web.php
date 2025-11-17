<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman index (setelah login)
Route::get('/index', function () {
    if (!session()->has('user')) {   // cek session yang benar
        return redirect()->route('login');
    }

    return view('index');
})->name('index');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
