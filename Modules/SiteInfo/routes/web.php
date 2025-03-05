<?php

use Illuminate\Support\Facades\Route;
use Modules\SiteInfo\Http\Controllers\SiteInfoController;

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
    // 'index' metodu için 'checkpermission:6,1' middleware'i uygulandı
    Route::get('/siteinfo', [SiteInfoController::class, 'index'])
        ->middleware('checkpermission:6,1')
        ->name('siteinfo.index');

    // 'create' metodu için 'checkpermission:6,2' middleware'i uygulandı
    Route::get('/siteinfo/create', [SiteInfoController::class, 'create'])
        ->middleware('checkpermission:6,2')
        ->name('siteinfo.create');

    // 'store' metodu için 'checkpermission:6,2' middleware'i uygulandı
    Route::post('/siteinfo', [SiteInfoController::class, 'store'])
        ->middleware('checkpermission:6,2')
        ->name('siteinfo.store');

    // 'edit' metodu için 'checkpermission:6,3' middleware'i uygulandı
    Route::get('/siteinfo/{siteinfo}/edit', [SiteInfoController::class, 'edit'])
        ->middleware('checkpermission:6,3')
        ->name('siteinfo.edit');

    // 'update' metodu için 'checkpermission:6,3' middleware'i uygulandı
    Route::patch('/siteinfo/{siteinfo}', [SiteInfoController::class, 'update'])
        ->middleware('checkpermission:6,3')
        ->name('siteinfo.update');

    // 'show' metodu için 'checkpermission:6,1' middleware'i uygulandı
    Route::get('/siteinfo/{siteinfo}', [SiteInfoController::class, 'show'])
        ->middleware('checkpermission:6,1')
        ->name('siteinfo.show');

    // 'destroy' metodu için 'checkpermission:6,4' middleware'i uygulandı
    Route::delete('/siteinfo/{siteinfo}', [SiteInfoController::class, 'destroy'])
        ->middleware('checkpermission:6,4')
        ->name('siteinfo.destroy');

    // 'changeStatusFalse' metodu için 'checkpermission:6,3' middleware'i uygulandı
    Route::get('/siteinfo/changeStatusFalse/{id}', [SiteInfoController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:6,3')
        ->name('siteinfo.changeStatusFalse');

    // 'changeStatusTrue' metodu için 'checkpermission:6,3' middleware'i uygulandı
    Route::get('/siteinfo/changeStatusTrue/{id}', [SiteInfoController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:6,3')
        ->name('siteinfo.changeStatusTrue');

    // 'deleteFile' metodu için 'checkpermission:6,3' middleware'i uygulandı
    Route::get('/siteinfo/deleteFile/{id}', [SiteInfoController::class, 'deleteFile'])
        ->middleware('checkpermission:6,3')
        ->name('siteinfo.deleteFile');
});
