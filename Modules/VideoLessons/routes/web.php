<?php

use Illuminate\Support\Facades\Route;
use Modules\VideoLessons\Http\Controllers\VideoLessonsController;

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
    Route::resource('videolessons', VideoLessonsController::class)
        ->middleware('checkpermission:19,1')
        ->names('videolessons');

    Route::get('/videolessons/changeStatusFalse/{id}', [VideoLessonsController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.changeStatusFalse');

    Route::get('/videolessons/changeStatusTrue/{id}', [VideoLessonsController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.changeStatusTrue');

    Route::get('/videolessons/deleteFile/{id}', [VideoLessonsController::class, 'deleteFile'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.deleteFile');

    Route::get('/videolessons/order_up/{id}', [VideoLessonsController::class, 'changeOrderUp'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.changeOrderUp');

    Route::get('/videolessons/order_down/{id}', [VideoLessonsController::class, 'changeOrderDown'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.changeOrderDown');

    Route::get('videolessons/create', [VideoLessonsController::class, 'create'])
        ->middleware('checkpermission:19,2')
        ->name('videolessons.create');

    Route::post('videolessons', [VideoLessonsController::class, 'store'])
        ->middleware('checkpermission:19,2')
        ->name('videolessons.store');

    Route::patch('videolessons/{videolessons}', [VideoLessonsController::class, 'update'])
        ->middleware('checkpermission:19,3')
        ->name('videolessons.customUpdate');
});

