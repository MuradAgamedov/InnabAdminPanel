<?php
use Illuminate\Support\Facades\Route;
use Modules\About\Http\Controllers\AboutController;

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

Route::group([ 'middleware' => 'auth'], function () {

    // 'index' metodu için 'checkpermission:5,1' middleware'i uygulandı
    Route::get('about', [AboutController::class, 'index'])
        ->middleware('checkpermission:5,1')
        ->name('about.index');

    // 'create' ve 'store' metodları için 'checkpermission:5,2' middleware'i uygulandı
    Route::get('about/create', [AboutController::class, 'create'])
        ->middleware('checkpermission:5,2')
        ->name('about.create');
    Route::post('about', [AboutController::class, 'store'])
        ->middleware('checkpermission:5,2')
        ->name('about.store');

    // 'edit' ve 'update' metodları için 'checkpermission:5,3' middleware'i uygulandı
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])
        ->middleware('checkpermission:5,3')
        ->name('about.edit');
    Route::patch('about/{id}', [AboutController::class, 'update'])
        ->middleware('checkpermission:5,3')
        ->name('about.update');

    // 'changeStatusFalse' ve 'changeStatusTrue' metodları için 'checkpermission:5,3' middleware'i uygulandı
    Route::get('about/changeStatusFalse/{id}', [AboutController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:5,3')
        ->name('about.changeStatusFalse');
    Route::get('about/changeStatusTrue/{id}', [AboutController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:5,3')
        ->name('about.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:5,3' middleware'i uygulandı
    Route::get('about/deleteFile/{id}', [AboutController::class, 'deleteFile'])
        ->middleware('checkpermission:5,3')
        ->name('about.deleteFile');

    // Diğer RESTful rotalar
    Route::resource('about', AboutController::class)->except(['index', 'create', 'store', 'edit', 'update'])->names('about');
});
