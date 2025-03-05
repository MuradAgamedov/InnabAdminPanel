<?php

use Illuminate\Support\Facades\Route;
use Modules\Translate\Http\Controllers\TranslateController;

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
    // Genel izin için 'checkpermission:3,1' middleware'i uygulandı
    Route::get('/translate', [TranslateController::class, 'index'])
        ->middleware('checkpermission:3,1')
        ->name('translate.index');

    // 'create' metodu için 'checkpermission:3,2' middleware'i uygulandı
    Route::get('translate/create', [TranslateController::class, 'create'])
        ->middleware('checkpermission:3,2')
        ->name('translate.create');

    // 'store' metodu için 'checkpermission:3,2' middleware'i uygulandı
    Route::post('translate', [TranslateController::class, 'store'])
        ->middleware('checkpermission:3,2')
        ->name('translate.store');

    // 'edit' metodu için 'checkpermission:3,3' middleware'i uygulandı
    Route::get('translate/{translate}/edit', [TranslateController::class, 'edit'])
        ->middleware('checkpermission:3,3')
        ->name('translate.edit');

    // 'update' metodu için 'checkpermission:3,3' middleware'i uygulandı
    Route::patch('translate/{translate}', [TranslateController::class, 'update'])
        ->middleware('checkpermission:3,3')
        ->name('translate.update');

    // 'show' metodu için 'checkpermission:3,1' middleware'i uygulandı
    Route::get('translate/{translate}', [TranslateController::class, 'show'])
        ->middleware('checkpermission:3,1')
        ->name('translate.show');

    // 'destroy' metodu için 'checkpermission:3,4' middleware'i uygulandı
    Route::delete('translate/{translate}', [TranslateController::class, 'destroy'])
        ->middleware('checkpermission:3,4')
        ->name('translate.destroy');

    // 'deleteFile' metodu için 'checkpermission:3,3' middleware'i uygulandı
    Route::get('/translate/deleteFile/{id}', [TranslateController::class, 'deleteFile'])
        ->middleware('checkpermission:3,3')
        ->name('translate.deleteFile');
});
