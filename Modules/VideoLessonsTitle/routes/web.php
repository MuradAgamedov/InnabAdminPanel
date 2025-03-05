<?php

use Illuminate\Support\Facades\Route;
use Modules\VideoLessonsTitle\Http\Controllers\VideoLessonsTitleController;

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
    Route::resource('videolessonstitle', VideoLessonsTitleController::class)
        ->middleware('checkpermission:20,1')
        ->names('videolessonstitle');

    Route::get('/videolessonstitle/changeStatusFalse/{id}', [VideoLessonsTitleController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:20,3')
        ->name('videolessonstitle.changeStatusFalse');

    Route::get('/videolessonstitle/changeStatusTrue/{id}', [VideoLessonsTitleController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:20,3')
        ->name('videolessonstitle.changeStatusTrue');

    Route::get('videolessonstitle/create', [VideoLessonsTitleController::class, 'create'])
        ->middleware('checkpermission:20,2')
        ->name('videolessonstitle.create');

    Route::post('videolessonstitle', [VideoLessonsTitleController::class, 'store'])
        ->middleware('checkpermission:20,2')
        ->name('videolessonstitle.store');

    Route::patch('videolessonstitle/{videolessonstitle}', [VideoLessonsTitleController::class, 'update'])
        ->middleware('checkpermission:20,3')
        ->name('videolessonstitle.patch');
});
