<?php

use Illuminate\Support\Facades\Route;
use Modules\Vebinar\Http\Controllers\VebinarController;

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
    // 'index', 'show' ve 'destroy' işlemleri için genel izin (26,1) verildi
    Route::resource('vebinar', VebinarController::class)
        ->middleware('checkpermission:26,1')
        ->names('vebinar');

    // 'changeStatusFalse' metodu için 'checkpermission:26,3' middleware'i uygulandı
    Route::get('/vebinar/changeStatusFalse/{id}', [VebinarController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:26,3')
        ->name('vebinar.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:26,3' middleware'i uygulandı
    Route::get('/vebinar/changeStatusTrue/{id}', [VebinarController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:26,3')
        ->name('vebinar.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:26,3' middleware'i uygulandı
    Route::get('/vebinar/deleteFile/{id}', [VebinarController::class, 'deleteFile'])
        ->middleware('checkpermission:26,3')
        ->name('vebinar.deleteFile');

    // 'create' metodu için 'checkpermission:26,2' middleware'i uygulandı
    Route::get('vebinar/create', [VebinarController::class, 'create'])
        ->middleware('checkpermission:26,2')
        ->name('vebinar.create');

    // 'store' metodu için 'checkpermission:26,2' middleware'i uygulandı
    Route::post('vebinar', [VebinarController::class, 'store'])
        ->middleware('checkpermission:26,2')
        ->name('vebinar.store');

    // 'update' metodu için 'checkpermission:26,3' middleware'i uygulandı
    Route::patch('vebinar/{vebinar}', [VebinarController::class, 'update'])
        ->middleware('checkpermission:26,3')
        ->name('vebinar.patch');
});

