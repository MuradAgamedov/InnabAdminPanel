<?php

use Illuminate\Support\Facades\Route;
use Modules\TrainingCategory\Http\Controllers\TrainingCategoryController;

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
    // 'index' metodu için 'checkpermission:22,1' middleware'i uygulandı
    Route::get('/trainingcategory', [TrainingCategoryController::class, 'index'])
        ->middleware('checkpermission:22,1')
        ->name('trainingcategory.index');

    // 'create' metodu için 'checkpermission:22,2' middleware'i uygulandı
    Route::get('/trainingcategory/create', [TrainingCategoryController::class, 'create'])
        ->middleware('checkpermission:22,2')
        ->name('trainingcategory.create');

    // 'store' metodu için 'checkpermission:22,2' middleware'i uygulandı
    Route::post('/trainingcategory', [TrainingCategoryController::class, 'store'])
        ->middleware('checkpermission:22,2')
        ->name('trainingcategory.store');

    // 'edit' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::get('/trainingcategory/{trainingcategory}/edit', [TrainingCategoryController::class, 'edit'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.edit');

    // 'update' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::patch('/trainingcategory/{trainingcategory}', [TrainingCategoryController::class, 'update'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.update');

    // 'show' metodu için 'checkpermission:22,1' middleware'i uygulandı
    Route::get('/trainingcategory/{trainingcategory}', [TrainingCategoryController::class, 'show'])
        ->middleware('checkpermission:22,1')
        ->name('trainingcategory.show');

    // 'destroy' metodu için 'checkpermission:22,4' middleware'i uygulandı
    Route::delete('/trainingcategory/{trainingcategory}', [TrainingCategoryController::class, 'destroy'])
        ->middleware('checkpermission:22,4')
        ->name('trainingcategory.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::get('/trainingcategory/changeStatusFalse/{id}', [TrainingCategoryController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::get('/trainingcategory/changeStatusTrue/{id}', [TrainingCategoryController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.changeStatusTrue');

    // 'changeOrderUp' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::get('/trainingcategory/order_up/{id}', [TrainingCategoryController::class, 'changeOrderUp'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.changeOrderUp');

    // 'changeOrderDown' metodu için 'checkpermission:22,3' middleware'i uygulandı
    Route::get('/trainingcategory/order_down/{id}', [TrainingCategoryController::class, 'changeOrderDown'])
        ->middleware('checkpermission:22,3')
        ->name('trainingcategory.changeOrderDown');
});

