<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/logout', [LogoutController::class, 'logout'])->name('admin.logout')->middleware('auth');
Route::get('/contact-forms', [ContactFormController::class, 'index'])->name('contact-forms.index');
Route::get('/contact-forms/{id}/delete', [ContactFormController::class, 'destroy'])->name('contact-forms.destroy');
Route::get('/simple-route', function () {
    return 'OK';
});
