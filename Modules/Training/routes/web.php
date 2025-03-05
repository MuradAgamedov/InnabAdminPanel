<?php

use Illuminate\Support\Facades\Route;
use Modules\Training\Http\Controllers\TrainingController;

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
    // 'index' metodu için 'checkpermission:23,1' middleware'i uygulandı
    Route::get('/training', [TrainingController::class, 'index'])
        ->middleware('checkpermission:23,1')
        ->name('training.index');

    // 'create' metodu için 'checkpermission:23,2' middleware'i uygulandı
    Route::get('/training/create', [TrainingController::class, 'create'])
        ->middleware('checkpermission:23,2')
        ->name('training.create');

    // 'store' metodu için 'checkpermission:23,2' middleware'i uygulandı
    Route::post('/training', [TrainingController::class, 'store'])
        ->middleware('checkpermission:23,2')
        ->name('training.store');

    // 'edit' metodu için 'checkpermission:23,3' middleware'i uygulandı
    Route::get('/training/{training}/edit', [TrainingController::class, 'edit'])
        ->middleware('checkpermission:23,3')
        ->name('training.edit');

    // 'update' metodu için 'checkpermission:23,3' middleware'i uygulandı
    Route::patch('/training/{training}', [TrainingController::class, 'update'])
        ->middleware('checkpermission:23,3')
        ->name('training.update');

    // 'show' metodu için 'checkpermission:23,1' middleware'i uygulandı
    Route::get('/training/{training}', [TrainingController::class, 'show'])
        ->middleware('checkpermission:23,1')
        ->name('training.show');

    // 'destroy' metodu için 'checkpermission:23,4' middleware'i uygulandı
    Route::delete('/training/{training}', [TrainingController::class, 'destroy'])
        ->middleware('checkpermission:23,4')
        ->name('training.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:23,3' middleware'i uygulandı
    Route::get('/training/changeStatusFalse/{id}', [TrainingController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:23,3')
        ->name('training.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:23,3' middleware'i uygulandı
    Route::get('/training/changeStatusTrue/{id}', [TrainingController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:23,3')
        ->name('training.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:23,3' middleware'i uygulandı
    Route::get('/training/deleteFile/{id}', [TrainingController::class, 'deleteFile'])
        ->middleware('checkpermission:23,3')
        ->name('training.deleteFile');
});
