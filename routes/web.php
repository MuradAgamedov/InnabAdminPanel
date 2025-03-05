<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/logout', [LogoutController::class, 'logout'])->name('admin.logout')->middleware('auth');

Route::get('/simple-route', function () {
    return 'OK';
});
