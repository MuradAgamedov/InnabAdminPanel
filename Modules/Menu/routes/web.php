<?php

use Illuminate\Support\Facades\Route;
use Modules\Menu\Http\Controllers\MenuController;

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

Route::group(['middleware' => 'auth'], function () {

    // 'index' metodu için 'checkpermission:1,1' middleware'i uygulandı
    Route::get('/menu', [MenuController::class, 'index'])
        ->middleware('checkpermission:1,1')
        ->name('menu.index');

    // 'create' metodu için 'checkpermission:1,2' middleware'i uygulandı
    Route::get('/menu/create', [MenuController::class, 'create'])
        ->middleware('checkpermission:1,2')
        ->name('menu.create');

    // 'store' metodu için 'checkpermission:1,2' middleware'i uygulandı
    Route::post('/menu', [MenuController::class, 'store'])
        ->middleware('checkpermission:1,2')
        ->name('menu.store');

    // 'edit' metodu için 'checkpermission:1,3' middleware'i uygulandı
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])
        ->middleware('checkpermission:1,3')
        ->name('menu.edit');

    // 'update' metodu için 'checkpermission:1,3' middleware'i uygulandı
    Route::patch('/menu/{menu}', [MenuController::class, 'update'])
        ->middleware('checkpermission:1,3')
        ->name('menu.update');

    // 'show' metodu için 'checkpermission:1,1' middleware'i uygulandı
    Route::get('/menu/{menu}', [MenuController::class, 'show'])
        ->middleware('checkpermission:1,1')
        ->name('menu.show');

    // 'destroy' metodu için 'checkpermission:1,4' middleware'i uygulandı
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])
        ->middleware('checkpermission:1,4')
        ->name('menu.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/menu/changeStatusFalse/{id}', [MenuController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:1,3')
        ->name('menu.changeStatusFalse');

    Route::get('/menu/changeStatusTrue/{id}', [MenuController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:1,3')
        ->name('menu.changeStatusTrue');

    Route::get('/menu/deleteFile/{id}', [MenuController::class, 'deleteFile'])
        ->middleware('checkpermission:1,3')
        ->name('menu.deleteFile');
});
