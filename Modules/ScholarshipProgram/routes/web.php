<?php

use Illuminate\Support\Facades\Route;
use Modules\ScholarshipProgram\Http\Controllers\ScholarshipProgramController;

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
    // 'index' metodu için 'checkpermission:28,1' middleware'i uygulandı
    Route::get('/scholarshipprogram', [ScholarshipProgramController::class, 'index'])
        ->middleware('checkpermission:28,1')
        ->name('scholarshipprogram.index');

    // 'create' metodu için 'checkpermission:28,2' middleware'i uygulandı
    Route::get('/scholarshipprogram/create', [ScholarshipProgramController::class, 'create'])
        ->middleware('checkpermission:28,2')
        ->name('scholarshipprogram.create');

    // 'store' metodu için 'checkpermission:28,2' middleware'i uygulandı
    Route::post('/scholarshipprogram', [ScholarshipProgramController::class, 'store'])
        ->middleware('checkpermission:28,2')
        ->name('scholarshipprogram.store');

    // 'edit' metodu için 'checkpermission:28,3' middleware'i uygulandı
    Route::get('/scholarshipprogram/{scholarshipprogram}/edit', [ScholarshipProgramController::class, 'edit'])
        ->middleware('checkpermission:28,3')
        ->name('scholarshipprogram.edit');

    // 'update' metodu için 'checkpermission:28,3' middleware'i uygulandı
    Route::patch('/scholarshipprogram/{scholarshipprogram}', [ScholarshipProgramController::class, 'update'])
        ->middleware('checkpermission:28,3')
        ->name('scholarshipprogram.update');

    // 'show' metodu için 'checkpermission:28,1' middleware'i uygulandı
    Route::get('/scholarshipprogram/{scholarshipprogram}', [ScholarshipProgramController::class, 'show'])
        ->middleware('checkpermission:28,1')
        ->name('scholarshipprogram.show');

    // 'destroy' metodu için 'checkpermission:28,4' middleware'i uygulandı
    Route::delete('/scholarshipprogram/{scholarshipprogram}', [ScholarshipProgramController::class, 'destroy'])
        ->middleware('checkpermission:28,4')
        ->name('scholarshipprogram.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:28,3' middleware'i uygulandı
    Route::get('/scholarshipprogram/changeStatusFalse/{id}', [ScholarshipProgramController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:28,3')
        ->name('scholarshipprogram.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:28,3' middleware'i uygulandı
    Route::get('/scholarshipprogram/changeStatusTrue/{id}', [ScholarshipProgramController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:28,3')
        ->name('scholarshipprogram.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:28,3' middleware'i uygulandı
    Route::get('/scholarshipprogram/deleteFile/{id}', [ScholarshipProgramController::class, 'deleteFile'])
        ->middleware('checkpermission:28,3')
        ->name('scholarshipprogram.deleteFile');
});
