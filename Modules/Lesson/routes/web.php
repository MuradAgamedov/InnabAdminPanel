<?php

use Illuminate\Support\Facades\Route;
use Modules\Lesson\Http\Controllers\LessonController;

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

    // 'index' metodu için 'checkpermission:21,1' middleware'i uygulandı
    Route::get('/lesson', [LessonController::class, 'index'])
        ->middleware('checkpermission:21,1')
        ->name('lesson.index');

    // 'create' metodu için 'checkpermission:21,2' middleware'i uygulandı
    Route::get('/lesson/create', [LessonController::class, 'create'])
        ->middleware('checkpermission:21,2')
        ->name('lesson.create');

    // 'store' metodu için 'checkpermission:21,2' middleware'i uygulandı
    Route::post('/lesson', [LessonController::class, 'store'])
        ->middleware('checkpermission:21,2')
        ->name('lesson.store');

    // 'edit' metodu için 'checkpermission:21,3' middleware'i uygulandı
    Route::get('/lesson/{lesson}/edit', [LessonController::class, 'edit'])
        ->middleware('checkpermission:21,3')
        ->name('lesson.edit');

    // 'update' metodu için 'checkpermission:21,3' middleware'i uygulandı
    Route::patch('/lesson/{lesson}', [LessonController::class, 'update'])
        ->middleware('checkpermission:21,3')
        ->name('lesson.update');

    // 'show' metodu için 'checkpermission:21,1' middleware'i uygulandı
    Route::get('/lesson/{lesson}', [LessonController::class, 'show'])
        ->middleware('checkpermission:21,1')
        ->name('lesson.show');

    // 'destroy' metodu için 'checkpermission:21,4' middleware'i uygulandı
    Route::delete('/lesson/{lesson}', [LessonController::class, 'destroy'])
        ->middleware('checkpermission:21,4')
        ->name('lesson.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/lesson/changeStatusFalse/{id}', [LessonController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:21,3')
        ->name('lesson.changeStatusFalse');

    Route::get('/lesson/changeStatusTrue/{id}', [LessonController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:21,3')
        ->name('lesson.changeStatusTrue');
});
