<?php

use Illuminate\Support\Facades\Route;
use Modules\Redirect\Http\Controllers\RedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => "admin", 'middleware' => 'auth'], function () {
    Route::resource('redirect', RedirectController::class)->names('redirect');
    Route::get('/redirect/changeStatusFalse/{id}', [RedirectController::class, 'changeStatusFalse'])->name('redirect.changeStatusFalse');
    Route::get('/redirect/changeStatusTrue/{id}', [RedirectController::class, 'changeStatusTrue'])->name('redirect.changeStatusTrue');
    Route::get('/redirect/deleteFile/{id}', [RedirectController::class, 'deleteFile'])->name('redirect.deleteFile');
});
