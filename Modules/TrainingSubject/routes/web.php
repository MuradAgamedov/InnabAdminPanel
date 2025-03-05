<?php

use Illuminate\Support\Facades\Route;
use Modules\TrainingSubject\Http\Controllers\TrainingSubjectController;

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
    // 'index' metodu için 'checkpermission:24,1' middleware'i uygulandı
    Route::get('/trainingsubject', [TrainingSubjectController::class, 'index'])
        ->middleware('checkpermission:24,1')
        ->name('trainingsubject.index');

    // 'create' metodu için 'checkpermission:24,2' middleware'i uygulandı
    Route::get('/trainingsubject/create', [TrainingSubjectController::class, 'create'])
        ->middleware('checkpermission:24,2')
        ->name('trainingsubject.create');

    // 'store' metodu için 'checkpermission:24,2' middleware'i uygulandı
    Route::post('/trainingsubject', [TrainingSubjectController::class, 'store'])
        ->middleware('checkpermission:24,2')
        ->name('trainingsubject.store');

    // 'edit' metodu için 'checkpermission:24,3' middleware'i uygulandı
    Route::get('/trainingsubject/{trainingsubject}/edit', [TrainingSubjectController::class, 'edit'])
        ->middleware('checkpermission:24,3')
        ->name('trainingsubject.edit');

    // 'update' metodu için 'checkpermission:24,3' middleware'i uygulandı
    Route::patch('/trainingsubject/{trainingsubject}', [TrainingSubjectController::class, 'update'])
        ->middleware('checkpermission:24,3')
        ->name('trainingsubject.update');

    // 'show' metodu için 'checkpermission:24,1' middleware'i uygulandı
    Route::get('/trainingsubject/{trainingsubject}', [TrainingSubjectController::class, 'show'])
        ->middleware('checkpermission:24,1')
        ->name('trainingsubject.show');

    // 'destroy' metodu için 'checkpermission:24,4' middleware'i uygulandı
    Route::delete('/trainingsubject/{trainingsubject}', [TrainingSubjectController::class, 'destroy'])
        ->middleware('checkpermission:24,4')
        ->name('trainingsubject.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:24,3' middleware'i uygulandı
    Route::get('/trainingsubject/changeStatusFalse/{id}', [TrainingSubjectController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:24,3')
        ->name('trainingsubject.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:24,3' middleware'i uygulandı
    Route::get('/trainingsubject/changeStatusTrue/{id}', [TrainingSubjectController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:24,3')
        ->name('trainingsubject.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:24,3' middleware'i uygulandı
    Route::get('/trainingsubject/deleteFile/{id}', [TrainingSubjectController::class, 'deleteFile'])
        ->middleware('checkpermission:24,3')
        ->name('trainingsubject.deleteFile');
});

