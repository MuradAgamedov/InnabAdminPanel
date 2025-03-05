<?php

use Illuminate\Support\Facades\Route;
use Modules\Privacy\Http\Controllers\PrivacyController;

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
    // 'index' metodu için 'checkpermission:7,1' middleware'i uygulandı
    Route::get('/privacy', [PrivacyController::class, 'index'])
        ->middleware('checkpermission:7,1')
        ->name('privacy.index');

    // 'create' metodu için 'checkpermission:7,2' middleware'i uygulandı
    Route::get('/privacy/create', [PrivacyController::class, 'create'])
        ->middleware('checkpermission:7,2')
        ->name('privacy.create');

    // 'store' metodu için 'checkpermission:7,2' middleware'i uygulandı
    Route::post('/privacy', [PrivacyController::class, 'store'])
        ->middleware('checkpermission:7,2')
        ->name('privacy.store');

    // 'edit' metodu için 'checkpermission:7,3' middleware'i uygulandı
    Route::get('/privacy/{privacy}/edit', [PrivacyController::class, 'edit'])
        ->middleware('checkpermission:7,3')
        ->name('privacy.edit');

    // 'update' metodu için 'checkpermission:7,3' middleware'i uygulandı
    Route::patch('/privacy/{privacy}', [PrivacyController::class, 'update'])
        ->middleware('checkpermission:7,3')
        ->name('privacy.update');

    // 'show' metodu için 'checkpermission:7,1' middleware'i uygulandı
    Route::get('/privacy/{privacy}', [PrivacyController::class, 'show'])
        ->middleware('checkpermission:7,1')
        ->name('privacy.show');

    // 'destroy' metodu için 'checkpermission:7,4' middleware'i uygulandı
    Route::delete('/privacy/{privacy}', [PrivacyController::class, 'destroy'])
        ->middleware('checkpermission:7,4')
        ->name('privacy.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/privacy/changeStatusFalse/{id}', [PrivacyController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:7,3')
        ->name('privacy.changeStatusFalse');

    Route::get('/privacy/changeStatusTrue/{id}', [PrivacyController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:7,3')
        ->name('privacy.changeStatusTrue');

    Route::get('/privacy/deleteFile/{id}', [PrivacyController::class, 'deleteFile'])
        ->middleware('checkpermission:7,3')
        ->name('privacy.deleteFile');
});
