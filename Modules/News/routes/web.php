<?php

use Illuminate\Support\Facades\Route;
use Modules\News\Http\Controllers\NewsController;

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

    // 'index' metodu için 'checkpermission:29,1' middleware'i uygulandı
    Route::get('/news', [NewsController::class, 'index'])
        ->middleware('checkpermission:29,1')
        ->name('news.index');

    // 'create' metodu için 'checkpermission:29,2' middleware'i uygulandı
    Route::get('/news/create', [NewsController::class, 'create'])
        ->middleware('checkpermission:29,2')
        ->name('news.create');

    // 'store' metodu için 'checkpermission:29,2' middleware'i uygulandı
    Route::post('/news', [NewsController::class, 'store'])
        ->middleware('checkpermission:29,2')
        ->name('news.store');

    // 'edit' metodu için 'checkpermission:29,3' middleware'i uygulandı
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])
        ->middleware('checkpermission:29,3')
        ->name('news.edit');

    // 'update' metodu için 'checkpermission:29,3' middleware'i uygulandı
    Route::patch('/news/{news}', [NewsController::class, 'update'])
        ->middleware('checkpermission:29,3')
        ->name('news.update');

    // 'show' metodu için 'checkpermission:29,1' middleware'i uygulandı
    Route::get('/news/{news}', [NewsController::class, 'show'])
        ->middleware('checkpermission:29,1')
        ->name('news.show');

    // 'destroy' metodu için 'checkpermission:29,4' middleware'i uygulandı
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])
        ->middleware('checkpermission:29,4')
        ->name('news.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/news/changeStatusFalse/{id}', [NewsController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:29,3')
        ->name('news.changeStatusFalse');

    Route::get('/news/changeStatusTrue/{id}', [NewsController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:29,3')
        ->name('news.changeStatusTrue');

    Route::get('/news/deleteFile/{id}', [NewsController::class, 'deleteFile'])
        ->middleware('checkpermission:29,3')
        ->name('news.deleteFile');
});

