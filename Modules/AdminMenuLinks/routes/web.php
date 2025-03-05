<?php

use Illuminate\Support\Facades\Route;
use Modules\AdminMenuLinks\Http\Controllers\AdminMenuLinksController;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'adminmenulinks.'], function () {
    Route::get('adminmenulinks', [AdminMenuLinksController::class, 'index'])->name('index');
    Route::get('adminmenulinks/create', [AdminMenuLinksController::class, 'create'])->name('create');
    Route::post('adminmenulinks', [AdminMenuLinksController::class, 'store'])->name('store');
    Route::get('adminmenulinks/{adminmenulink}/edit', [AdminMenuLinksController::class, 'edit'])->name('edit');
    Route::match(['put', 'patch'], 'adminmenulinks/{adminmenulink}/update', [AdminMenuLinksController::class, 'update'])->name('update');

    Route::get('adminmenulinks/changeStatusFalse/{id}', [AdminMenuLinksController::class, 'changeStatusFalse'])->name('changeStatusFalse');
    Route::get('adminmenulinks/changeStatusTrue/{id}', [AdminMenuLinksController::class, 'changeStatusTrue'])->name('changeStatusTrue');
    Route::get('adminmenulinks/deleteFile/{id}', [AdminMenuLinksController::class, 'deleteFile'])->name('deleteFile');
});
