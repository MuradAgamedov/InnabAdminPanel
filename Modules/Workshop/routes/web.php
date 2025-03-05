<?php

use Illuminate\Support\Facades\Route;
use Modules\Workshop\Http\Controllers\WorkshopController;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('workshop', WorkshopController::class)
        ->middleware('checkpermission:27,1')
        ->names('workshop');

    Route::get('/workshop/changeStatusFalse/{id}', [WorkshopController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:27,3')
        ->name('workshop.changeStatusFalse');

    Route::get('/workshop/changeStatusTrue/{id}', [WorkshopController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:27,3')
        ->name('workshop.changeStatusTrue');

    Route::get('/workshop/deleteFile/{id}', [WorkshopController::class, 'deleteFile'])
        ->middleware('checkpermission:27,3')
        ->name('workshop.deleteFile');

    Route::get('workshop/create', [WorkshopController::class, 'create'])
        ->middleware('checkpermission:27,2')
        ->name('workshop.create');

    Route::post('workshop', [WorkshopController::class, 'store'])
        ->middleware('checkpermission:27,2')
        ->name('workshop.store');

    Route::patch('workshop/{workshop}', [WorkshopController::class, 'update'])
        ->middleware('checkpermission:27,3')
        ->name('workshop.patch');
});
