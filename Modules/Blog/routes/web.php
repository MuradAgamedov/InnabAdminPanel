<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;

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

    // 'index' metodu için 'checkpermission:16,1' middleware'i uygulandı
    Route::get('/blog', [BlogController::class, 'index'])
        ->middleware('checkpermission:16,1')
        ->name('blog.index');

    // 'create' metodu için 'checkpermission:16,2' middleware'i uygulandı
    Route::get('/blog/create', [BlogController::class, 'create'])
        ->middleware('checkpermission:16,2')
        ->name('blog.create');

    // 'store' metodu için 'checkpermission:16,2' middleware'i uygulandı
    Route::post('/blog', [BlogController::class, 'store'])
        ->middleware('checkpermission:16,2')
        ->name('blog.store');

    // 'edit' metodu için 'checkpermission:16,3' middleware'i uygulandı
    Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])
        ->middleware('checkpermission:16,3')
        ->name('blog.edit');

    // 'update' metodu için 'checkpermission:16,3' middleware'i uygulandı
    Route::patch('/blog/{blog}', [BlogController::class, 'update'])
        ->middleware('checkpermission:16,3')
        ->name('blog.update');

    // 'show' metodu için 'checkpermission:16,1' middleware'i uygulandı
    Route::get('/blog/{blog}', [BlogController::class, 'show'])
        ->middleware('checkpermission:16,1')
        ->name('blog.show');

    // 'destroy' metodu için 'checkpermission:16,4' middleware'i uygulandı
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])
        ->middleware('checkpermission:16,4')
        ->name('blog.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/blog/changeStatusFalse/{id}', [BlogController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:16,3')
        ->name('blog.changeStatusFalse');

    Route::get('/blog/changeStatusTrue/{id}', [BlogController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:16,3')
        ->name('blog.changeStatusTrue');

    Route::get('/blog/deleteFile/{id}', [BlogController::class, 'deleteFile'])
        ->middleware('checkpermission:16,3')
        ->name('blog.deleteFile');

    Route::get('/blog/order_up/{id}', [BlogController::class, 'changeOrderUp'])
        ->middleware('checkpermission:16,3')
        ->name('blog.changeOrderUp');

    Route::get('/blog/order_down/{id}', [BlogController::class, 'changeOrderDown'])
        ->middleware('checkpermission:16,3')
        ->name('blog.changeOrderDown');
});
