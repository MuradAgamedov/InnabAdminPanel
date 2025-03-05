<?php

use Illuminate\Support\Facades\Route;
use Modules\HeaderDatas\Http\Controllers\HeaderDatasController;

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

Route::group(['middleware' => 'auth'], function () {

    // 'index' metodu için 'checkpermission:13,1' middleware'i uygulandı
    Route::get('/headerdatas', [HeaderDatasController::class, 'index'])
        ->middleware('checkpermission:13,1')
        ->name('headerdatas.index');

    // 'create' metodu için 'checkpermission:13,2' middleware'i uygulandı
    Route::get('/headerdatas/create', [HeaderDatasController::class, 'create'])
        ->middleware('checkpermission:13,2')
        ->name('headerdatas.create');

    // 'store' metodu için 'checkpermission:13,2' middleware'i uygulandı
    Route::post('/headerdatas', [HeaderDatasController::class, 'store'])
        ->middleware('checkpermission:13,2')
        ->name('headerdatas.store');

    // 'edit' metodu için 'checkpermission:13,3' middleware'i uygulandı
    Route::get('/headerdatas/{headerdata}/edit', [HeaderDatasController::class, 'edit'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.edit');

    // 'update' metodu için 'checkpermission:13,3' middleware'i uygulandı
    Route::patch('/headerdatas/{headerdata}', [HeaderDatasController::class, 'update'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.update');

    // 'show' metodu için 'checkpermission:13,1' middleware'i uygulandı
    Route::get('/headerdatas/{headerdata}', [HeaderDatasController::class, 'show'])
        ->middleware('checkpermission:13,1')
        ->name('headerdatas.show');

    // 'destroy' metodu için 'checkpermission:13,4' middleware'i uygulandı
    Route::delete('/headerdatas/{headerdata}', [HeaderDatasController::class, 'destroy'])
        ->middleware('checkpermission:13,4')
        ->name('headerdatas.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/headerdatas/changeStatusFalse/{id}', [HeaderDatasController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.changeStatusFalse');

    Route::get('/headerdatas/changeStatusTrue/{id}', [HeaderDatasController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.changeStatusTrue');

    Route::get('/headerdatas/deleteFile/{id}', [HeaderDatasController::class, 'deleteFile'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.deleteFile');

    Route::get('/headerdatas/order_up/{id}', [HeaderDatasController::class, 'changeOrderUp'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.changeOrderUp');

    Route::get('/headerdatas/order_down/{id}', [HeaderDatasController::class, 'changeOrderDown'])
        ->middleware('checkpermission:13,3')
        ->name('headerdatas.changeOrderDown');
});
