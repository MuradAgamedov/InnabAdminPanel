<?php

use Illuminate\Support\Facades\Route;
use Modules\VideoLessonsCategory\Http\Controllers\VideoLessonsCategoryController;

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
    Route::resource('videolessonscategory', VideoLessonsCategoryController::class)
        ->middleware('checkpermission:18,1')
        ->names('videolessonscategory');

    Route::get('/videolessonscategory/changeStatusFalse/{id}', [VideoLessonsCategoryController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:18,3')
        ->name('videolessonscategory.changeStatusFalse');

    Route::get('/videolessonscategory/changeStatusTrue/{id}', [VideoLessonsCategoryController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:18,3')
        ->name('videolessonscategory.changeStatusTrue');

    Route::get('/videolessonscategory/order_up/{id}', [VideoLessonsCategoryController::class, 'changeOrderUp'])
        ->middleware('checkpermission:18,3')
        ->name('videolessonscategory.changeOrderUp');

    Route::get('/videolessonscategory/order_down/{id}', [VideoLessonsCategoryController::class, 'changeOrderDown'])
        ->middleware('checkpermission:18,3')
        ->name('videolessonscategory.changeOrderDown');

    Route::get('videolessonscategory/create', [VideoLessonsCategoryController::class, 'create'])
        ->middleware('checkpermission:18,2')
        ->name('videolessonscategory.create');

    Route::post('videolessonscategory', [VideoLessonsCategoryController::class, 'store'])
        ->middleware('checkpermission:18,2')
        ->name('videolessonscategory.store');

    Route::patch('videolessonscategory/{videolessonscategory}', [VideoLessonsCategoryController::class, 'update'])
        ->middleware('checkpermission:18,3')
        ->name('videolessonscategory.patch');
});

