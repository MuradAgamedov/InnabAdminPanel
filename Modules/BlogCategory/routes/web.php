<?php

use Illuminate\Support\Facades\Route;
use Modules\BlogCategory\Http\Controllers\BlogCategoryController;

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

    // 'index' metodu için 'checkpermission:15,1' middleware'i uygulandı
    Route::get('/blogcategory', [BlogCategoryController::class, 'index'])
        ->middleware('checkpermission:15,1')
        ->name('blogcategory.index');

    // 'create' metodu için 'checkpermission:15,2' middleware'i uygulandı
    Route::get('/blogcategory/create', [BlogCategoryController::class, 'create'])
        ->middleware('checkpermission:15,2')
        ->name('blogcategory.create');

    // 'store' metodu için 'checkpermission:15,2' middleware'i uygulandı
    Route::post('/blogcategory', [BlogCategoryController::class, 'store'])
        ->middleware('checkpermission:15,2')
        ->name('blogcategory.store');

    // 'edit' metodu için 'checkpermission:15,3' middleware'i uygulandı
    Route::get('/blogcategory/{blogcategory}/edit', [BlogCategoryController::class, 'edit'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.edit');

    // 'update' metodu için 'checkpermission:15,3' middleware'i uygulandı
    Route::patch('/blogcategory/{blogcategory}', [BlogCategoryController::class, 'update'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.update');

    // 'show' metodu için 'checkpermission:15,1' middleware'i uygulandı
    Route::get('/blogcategory/{blogcategory}', [BlogCategoryController::class, 'show'])
        ->middleware('checkpermission:15,1')
        ->name('blogcategory.show');

    // 'destroy' metodu için 'checkpermission:15,4' middleware'i uygulandı
    Route::delete('/blogcategory/{blogcategory}', [BlogCategoryController::class, 'destroy'])
        ->middleware('checkpermission:15,4')
        ->name('blogcategory.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/blogcategory/changeStatusFalse/{id}', [BlogCategoryController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.changeStatusFalse');

    Route::get('/blogcategory/changeStatusTrue/{id}', [BlogCategoryController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.changeStatusTrue');

    Route::get('/blogcategory/order_up/{id}', [BlogCategoryController::class, 'changeOrderUp'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.changeOrderUp');

    Route::get('/blogcategory/order_down/{id}', [BlogCategoryController::class, 'changeOrderDown'])
        ->middleware('checkpermission:15,3')
        ->name('blogcategory.changeOrderDown');
});
