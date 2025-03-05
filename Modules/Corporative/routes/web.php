<?php

use Illuminate\Support\Facades\Route;
use Modules\Corporative\Http\Controllers\CorporativeController;

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

    // 'index' metodu için 'checkpermission:8,1' middleware'i uygulandı
    Route::get('/corporative', [CorporativeController::class, 'index'])
        ->middleware('checkpermission:8,1')
        ->name('corporative.index');

    // 'create' metodu için 'checkpermission:8,2' middleware'i uygulandı
    Route::get('/corporative/create', [CorporativeController::class, 'create'])
        ->middleware('checkpermission:8,2')
        ->name('corporative.create');

    // 'store' metodu için 'checkpermission:8,2' middleware'i uygulandı
    Route::post('/corporative', [CorporativeController::class, 'store'])
        ->middleware('checkpermission:8,2')
        ->name('corporative.store');

    // 'edit' metodu için 'checkpermission:8,3' middleware'i uygulandı
    Route::get('/corporative/{corporative}/edit', [CorporativeController::class, 'edit'])
        ->middleware('checkpermission:8,3')
        ->name('corporative.edit');

    // 'update' metodu için 'checkpermission:8,3' middleware'i uygulandı
    Route::patch('/corporative/{corporative}', [CorporativeController::class, 'update'])
        ->middleware('checkpermission:8,3')
        ->name('corporative.update');

    // 'show' metodu için 'checkpermission:8,1' middleware'i uygulandı
    Route::get('/corporative/{corporative}', [CorporativeController::class, 'show'])
        ->middleware('checkpermission:8,1')
        ->name('corporative.show');

    // 'destroy' metodu için 'checkpermission:8,4' middleware'i uygulandı
    Route::delete('/corporative/{corporative}', [CorporativeController::class, 'destroy'])
        ->middleware('checkpermission:8,4')
        ->name('corporative.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/corporative/changeStatusFalse/{id}', [CorporativeController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:8,3')
        ->name('corporative.changeStatusFalse');

    Route::get('/corporative/changeStatusTrue/{id}', [CorporativeController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:8,3')
        ->name('corporative.changeStatusTrue');

    Route::get('/corporative/deleteFile/{id}', [CorporativeController::class, 'deleteFile'])
        ->middleware('checkpermission:8,3')
        ->name('corporative.deleteFile');
});
