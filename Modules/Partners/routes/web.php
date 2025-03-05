<?php

use Illuminate\Support\Facades\Route;
use Modules\Partners\Http\Controllers\PartnersController;

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
    // 'index' metodu için 'checkpermission:14,1' middleware'i uygulandı
    Route::get('/partners', [PartnersController::class, 'index'])
        ->middleware('checkpermission:14,1')
        ->name('partners.index');

    // 'create' metodu için 'checkpermission:14,2' middleware'i uygulandı
    Route::get('/partners/create', [PartnersController::class, 'create'])
        ->middleware('checkpermission:14,2')
        ->name('partners.create');

    // 'store' metodu için 'checkpermission:14,2' middleware'i uygulandı
    Route::post('/partners', [PartnersController::class, 'store'])
        ->middleware('checkpermission:14,2')
        ->name('partners.store');

    // 'edit' metodu için 'checkpermission:14,3' middleware'i uygulandı
    Route::get('/partners/{partners}/edit', [PartnersController::class, 'edit'])
        ->middleware('checkpermission:14,3')
        ->name('partners.edit');

    // 'update' metodu için 'checkpermission:14,3' middleware'i uygulandı
    Route::patch('/partners/{partners}', [PartnersController::class, 'update'])
        ->middleware('checkpermission:14,3')
        ->name('partners.update');

    // 'show' metodu için 'checkpermission:14,1' middleware'i uygulandı
    Route::get('/partners/{partners}', [PartnersController::class, 'show'])
        ->middleware('checkpermission:14,1')
        ->name('partners.show');

    // 'destroy' metodu için 'checkpermission:14,4' middleware'i uygulandı
    Route::delete('/partners/{partners}', [PartnersController::class, 'destroy'])
        ->middleware('checkpermission:14,4')
        ->name('partners.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/partners/changeStatusFalse/{id}', [PartnersController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:14,3')
        ->name('partners.changeStatusFalse');

    Route::get('/partners/changeStatusTrue/{id}', [PartnersController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:14,3')
        ->name('partners.changeStatusTrue');

    Route::get('/partners/deleteFile/{id}', [PartnersController::class, 'deleteFile'])
        ->middleware('checkpermission:14,3')
        ->name('partners.deleteFile');
});
