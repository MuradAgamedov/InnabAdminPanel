<?php
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // 'index' metodu için 'checkpermission:30,1' middleware'i uygulandı
    Route::get('admin', [AdminController::class, 'index'])
        ->middleware('checkpermission:30,1')
        ->name('index');

    // 'create' metodu için 'checkpermission:30,2' middleware'i uygulandı
    Route::get('admin/create', [AdminController::class, 'create'])
        ->middleware('checkpermission:30,2')
        ->name('admin.create');

    // 'store' metodu için 'checkpermission:30,2' middleware'i uygulandı
    Route::post('admin/store', [AdminController::class, 'store'])
        ->middleware('checkpermission:30,2')
        ->name('admin.store');

    // 'edit' metodu için 'checkpermission:30,3' middleware'i uygulandı
    Route::get('admin/{admin}/edit', [AdminController::class, 'edit'])
        ->middleware('checkpermission:30,3')
        ->name('edit');

    // 'update' metodu için 'checkpermission:30,3' middleware'i uygulandı
    Route::match(['put', 'patch'], 'admin/{admin}', [AdminController::class, 'update'])
        ->middleware('checkpermission:30,3')
        ->name('admin.update');

    // 'updatePassword' metodu için 'checkpermission:30,3' middleware'i uygulandı
    Route::patch('admin/{id}/updatePassword', [AdminController::class, 'updatePassword'])
        ->middleware('checkpermission:30,3')
        ->name('admin.updatePassword');

});
