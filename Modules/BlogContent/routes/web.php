<?php

use Illuminate\Support\Facades\Route;
use Modules\BlogContent\Http\Controllers\BlogContentController;

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

    // 'index' metodu için 'checkpermission:17,1' middleware'i uygulandı
    Route::get('/blogcontent', [BlogContentController::class, 'index'])
        ->middleware('checkpermission:17,1')
        ->name('blogcontent.index');

    // 'create' metodu için 'checkpermission:17,2' middleware'i uygulandı
    Route::get('/blogcontent/create', [BlogContentController::class, 'create'])
        ->middleware('checkpermission:17,2')
        ->name('blogcontent.create');

    // 'store' metodu için 'checkpermission:17,2' middleware'i uygulandı
    Route::post('/blogcontent', [BlogContentController::class, 'store'])
        ->middleware('checkpermission:17,2')
        ->name('blogcontent.store');

    // 'edit' metodu için 'checkpermission:17,3' middleware'i uygulandı
    Route::get('/blogcontent/{blogcontent}/edit', [BlogContentController::class, 'edit'])
        ->middleware('checkpermission:17,3')
        ->name('blogcontent.edit');

    // 'update' metodu için 'checkpermission:17,3' middleware'i uygulandı
    Route::patch('/blogcontent/{blogcontent}', [BlogContentController::class, 'update'])
        ->middleware('checkpermission:17,3')
        ->name('blogcontent.update');

    // 'show' metodu için 'checkpermission:17,1' middleware'i uygulandı
    Route::get('/blogcontent/{blogcontent}', [BlogContentController::class, 'show'])
        ->middleware('checkpermission:17,1')
        ->name('blogcontent.show');

    // 'destroy' metodu için 'checkpermission:17,4' middleware'i uygulandı
    Route::delete('/blogcontent/{blogcontent}', [BlogContentController::class, 'destroy'])
        ->middleware('checkpermission:17,4')
        ->name('blogcontent.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/blogcontent/changeStatusFalse/{id}', [BlogContentController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:17,3')
        ->name('blogcontent.changeStatusFalse');

    Route::get('/blogcontent/changeStatusTrue/{id}', [BlogContentController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:17,3')
        ->name('blogcontent.changeStatusTrue');

    Route::get('/blogcontent/deleteFile/{id}', [BlogContentController::class, 'deleteFile'])
        ->middleware('checkpermission:17,3')
        ->name('blogcontent.deleteFile');
});

