<?php

use Illuminate\Support\Facades\Route;
use Modules\Project\Http\Controllers\ProjectController;

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
    // 'index' metodu için 'checkpermission:9,1' middleware'i uygulandı
    Route::get('/project', [ProjectController::class, 'index'])
        ->middleware('checkpermission:9,1')
        ->name('project.index');

    // 'create' metodu için 'checkpermission:9,2' middleware'i uygulandı
    Route::get('/project/create', [ProjectController::class, 'create'])
        ->middleware('checkpermission:9,2')
        ->name('project.create');

    // 'store' metodu için 'checkpermission:9,2' middleware'i uygulandı
    Route::post('/project', [ProjectController::class, 'store'])
        ->middleware('checkpermission:9,2')
        ->name('project.store');

    // 'edit' metodu için 'checkpermission:9,3' middleware'i uygulandı
    Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])
        ->middleware('checkpermission:9,3')
        ->name('project.edit');

    // 'update' metodu için 'checkpermission:9,3' middleware'i uygulandı
    Route::patch('/project/{project}', [ProjectController::class, 'update'])
        ->middleware('checkpermission:9,3')
        ->name('project.update');

    // 'show' metodu için 'checkpermission:9,1' middleware'i uygulandı
    Route::get('/project/{project}', [ProjectController::class, 'show'])
        ->middleware('checkpermission:9,1')
        ->name('project.show');

    // 'destroy' metodu için 'checkpermission:9,4' middleware'i uygulandı
    Route::delete('/project/{project}', [ProjectController::class, 'destroy'])
        ->middleware('checkpermission:9,4')
        ->name('project.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:9,3' middleware'i uygulandı
    Route::get('/project/changeStatusFalse/{id}', [ProjectController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:9,3')
        ->name('project.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:9,3' middleware'i uygulandı
    Route::get('/project/changeStatusTrue/{id}', [ProjectController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:9,3')
        ->name('project.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:9,3' middleware'i uygulandı
    Route::get('/project/deleteFile/{id}', [ProjectController::class, 'deleteFile'])
        ->middleware('checkpermission:9,3')
        ->name('project.deleteFile');
});
