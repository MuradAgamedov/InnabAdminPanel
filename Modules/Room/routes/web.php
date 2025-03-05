<?php

use Illuminate\Support\Facades\Route;
use Modules\Room\Http\Controllers\RoomController;

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
    // 'index' metodu için 'checkpermission:12,1' middleware'i uygulandı
    Route::get('/room', [RoomController::class, 'index'])
        ->middleware('checkpermission:12,1')
        ->name('room.index');

    // 'create' metodu için 'checkpermission:12,2' middleware'i uygulandı
    Route::get('/room/create', [RoomController::class, 'create'])
        ->middleware('checkpermission:12,2')
        ->name('room.create');

    // 'store' metodu için 'checkpermission:12,2' middleware'i uygulandı
    Route::post('/room', [RoomController::class, 'store'])
        ->middleware('checkpermission:12,2')
        ->name('room.store');

    // 'edit' metodu için 'checkpermission:12,3' middleware'i uygulandı
    Route::get('/room/{room}/edit', [RoomController::class, 'edit'])
        ->middleware('checkpermission:12,3')
        ->name('room.edit');

    // 'update' metodu için 'checkpermission:12,3' middleware'i uygulandı
    Route::patch('/room/{room}', [RoomController::class, 'update'])
        ->middleware('checkpermission:12,3')
        ->name('room.update');

    // 'show' metodu için 'checkpermission:12,1' middleware'i uygulandı
    Route::get('/room/{room}', [RoomController::class, 'show'])
        ->middleware('checkpermission:12,1')
        ->name('room.show');

    // 'destroy' metodu için 'checkpermission:12,4' middleware'i uygulandı
    Route::delete('/room/{room}', [RoomController::class, 'destroy'])
        ->middleware('checkpermission:12,4')
        ->name('room.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:12,3' middleware'i uygulandı
    Route::get('/room/changeStatusFalse/{id}', [RoomController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:12,3')
        ->name('room.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:12,3' middleware'i uygulandı
    Route::get('/room/changeStatusTrue/{id}', [RoomController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:12,3')
        ->name('room.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:12,3' middleware'i uygulandı
    Route::get('/room/deleteFile/{id}', [RoomController::class, 'deleteFile'])
        ->middleware('checkpermission:12,3')
        ->name('room.deleteFile');
});

