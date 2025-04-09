<?php

use Illuminate\Support\Facades\Route;
use Modules\ReviewLink\Http\Controllers\ReviewLinkController;

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
    Route::resource('reviewlink', ReviewLinkController::class)->names('reviewlink');
    Route::get('/reviewlink/changeStatusFalse/{id}', [ReviewLinkController::class, 'changeStatusFalse'])->name('reviewlink.changeStatusFalse');
    Route::get('/reviewlink/changeStatusTrue/{id}', [ReviewLinkController::class, 'changeStatusTrue'])->name('reviewlink.changeStatusTrue');
    Route::get('/reviewlink/deleteFile/{id}', [ReviewLinkController::class, 'deleteFile'])->name('reviewlink.deleteFile');
});
