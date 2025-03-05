<?php

use Illuminate\Support\Facades\Route;
use Modules\Lang\Http\Controllers\LangController;

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
Route::group([ 'middleware' => 'auth'], function () {

    // 'index' metodu için 'checkpermission:4,1' middleware'i uygulandı
    Route::get('/lang', [LangController::class, 'index'])
        ->middleware('checkpermission:4,1')
        ->name('lang.index');

    // 'create' metodu için 'checkpermission:4,2' middleware'i uygulandı
    Route::get('/lang/create', [LangController::class, 'create'])
        ->middleware('checkpermission:4,2')
        ->name('lang.create');

    // 'store' metodu için 'checkpermission:4,2' middleware'i uygulandı
    Route::post('/lang', [LangController::class, 'store'])
        ->middleware('checkpermission:4,2')
        ->name('lang.store');

    // 'edit' metodu için 'checkpermission:4,3' middleware'i uygulandı
    Route::get('/lang/{lang}/edit', [LangController::class, 'edit'])
        ->middleware('checkpermission:4,3')
        ->name('lang.edit');

    // 'update' metodu için 'checkpermission:4,3' middleware'i uygulandı
    Route::patch('/lang/{lang}', [LangController::class, 'update'])
        ->middleware('checkpermission:4,3')
        ->name('lang.update');

    // 'show' metodu için 'checkpermission:4,1' middleware'i uygulandı
    Route::get('/lang/{lang}', [LangController::class, 'show'])
        ->middleware('checkpermission:4,1')
        ->name('lang.show');

    // 'destroy' metodu için 'checkpermission:4,4' middleware'i uygulandı
    Route::delete('/lang/{lang}', [LangController::class, 'destroy'])
        ->middleware('checkpermission:4,4')
        ->name('lang.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/lang/changeDefault/{id}', [LangController::class, 'changeDefault'])
        ->middleware('checkpermission:4,2')
        ->name('lang.changeDefault');

    Route::get('/lang/changeStatusFalse/{id}', [LangController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:4,3')
        ->name('lang.changeStatusFalse');

    Route::get('/lang/changeStatusTrue/{id}', [LangController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:4,3')
        ->name('lang.changeStatusTrue');

    Route::get('/lang/order_up/{id}', [LangController::class, 'changeOrderUp'])
        ->middleware('checkpermission:4,3')
        ->name('lang.changeOrderUp');

    Route::get('/lang/order_down/{id}', [LangController::class, 'changeOrderDown'])
        ->middleware('checkpermission:4,3')
        ->name('lang.changeOrderDown');
});

