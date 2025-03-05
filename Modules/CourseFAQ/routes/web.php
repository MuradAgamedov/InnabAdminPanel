<?php

use Illuminate\Support\Facades\Route;
use Modules\CourseFAQ\Http\Controllers\CourseFAQController;

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

    // 'index' metodu için 'checkpermission:25,1' middleware'i uygulandı
    Route::get('/coursefaq', [CourseFAQController::class, 'index'])
        ->middleware('checkpermission:25,1')
        ->name('coursefaq.index');

    // 'create' metodu için 'checkpermission:25,2' middleware'i uygulandı
    Route::get('/coursefaq/create', [CourseFAQController::class, 'create'])
        ->middleware('checkpermission:25,2')
        ->name('coursefaq.create');

    // 'store' metodu için 'checkpermission:25,2' middleware'i uygulandı
    Route::post('/coursefaq', [CourseFAQController::class, 'store'])
        ->middleware('checkpermission:25,2')
        ->name('coursefaq.store');

    // 'edit' metodu için 'checkpermission:25,3' middleware'i uygulandı
    Route::get('/coursefaq/{coursefaq}/edit', [CourseFAQController::class, 'edit'])
        ->middleware('checkpermission:25,3')
        ->name('coursefaq.edit');

    // 'update' metodu için 'checkpermission:25,3' middleware'i uygulandı
    Route::patch('/coursefaq/{coursefaq}', [CourseFAQController::class, 'update'])
        ->middleware('checkpermission:25,3')
        ->name('coursefaq.update');

    // 'show' metodu için 'checkpermission:25,1' middleware'i uygulandı
    Route::get('/coursefaq/{coursefaq}', [CourseFAQController::class, 'show'])
        ->middleware('checkpermission:25,1')
        ->name('coursefaq.show');

    // 'destroy' metodu için 'checkpermission:25,4' middleware'i uygulandı
    Route::delete('/coursefaq/{coursefaq}', [CourseFAQController::class, 'destroy'])
        ->middleware('checkpermission:25,4')
        ->name('coursefaq.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/coursefaq/changeStatusFalse/{id}', [CourseFAQController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:25,3')
        ->name('coursefaq.changeStatusFalse');

    Route::get('/coursefaq/changeStatusTrue/{id}', [CourseFAQController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:25,3')
        ->name('coursefaq.changeStatusTrue');

    Route::get('/coursefaq/deleteFile/{id}', [CourseFAQController::class, 'deleteFile'])
        ->middleware('checkpermission:25,3')
        ->name('coursefaq.deleteFile');
});
