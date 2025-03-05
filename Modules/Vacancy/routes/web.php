<?php

use Illuminate\Support\Facades\Route;
use Modules\Vacancy\Http\Controllers\VacancyController;

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
    // 'index', 'show' ve 'destroy' işlemleri için genel izin (11,1) verildi
    Route::get('vacancy', [VacancyController::class, 'index'])
        ->middleware('checkpermission:11,1')
        ->name('vacancy.index');

    // 'show' rotası
  

    // 'create' rotası
    Route::get('vacancy/create', [VacancyController::class, 'create'])
        ->middleware('checkpermission:11,2')
        ->name('vacancy.create');

    // 'store' rotası
    Route::post('vacancy', [VacancyController::class, 'store'])
        ->middleware('checkpermission:11,2')
        ->name('vacancy.store');

    // 'edit' rotası
    Route::get('vacancy/{vacancy}/edit', [VacancyController::class, 'edit'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.edit');

    // 'update' rotası
    Route::patch('vacancy/{vacancy}', [VacancyController::class, 'update'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.update');

    // 'destroy' rotası
    Route::delete('vacancy/{vacancy}', [VacancyController::class, 'destroy'])
        ->middleware('checkpermission:11,1')
        ->name('vacancy.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:11,3' middleware'i uygulandı
    Route::get('/vacancy/changeStatusFalse/{id}', [VacancyController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:11,3' middleware'i uygulandı
    Route::get('/vacancy/changeStatusTrue/{id}', [VacancyController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:11,3' middleware'i uygulandı
    Route::get('/vacancy/deleteFile/{id}', [VacancyController::class, 'deleteFile'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.deleteFile');

    // 'create' metodu için 'checkpermission:11,2' middleware'i uygulandı
    Route::get('vacancy/create', [VacancyController::class, 'create'])
        ->middleware('checkpermission:11,2')
        ->name('vacancy.create');

    // 'store' metodu için 'checkpermission:11,2' middleware'i uygulandı
    Route::post('vacancy', [VacancyController::class, 'store'])
        ->middleware('checkpermission:11,2')
        ->name('vacancy.store');

    // 'update' metodu için 'checkpermission:11,3' middleware'i uygulandı
    Route::patch('vacancy/{vacancy}', [VacancyController::class, 'update'])
        ->middleware('checkpermission:11,3')
        ->name('vacancy.update');
});

