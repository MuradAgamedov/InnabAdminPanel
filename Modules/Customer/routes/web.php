<?php

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\CustomerController;

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

    // 'index' metodu için 'checkpermission:10,1' middleware'i uygulandı
    Route::get('/customer', [CustomerController::class, 'index'])
        ->middleware('checkpermission:10,1')
        ->name('customer.index');

    // 'create' metodu için 'checkpermission:10,2' middleware'i uygulandı
    Route::get('/customer/create', [CustomerController::class, 'create'])
        ->middleware('checkpermission:10,2')
        ->name('customer.create');

    // 'store' metodu için 'checkpermission:10,2' middleware'i uygulandı
    Route::post('/customer', [CustomerController::class, 'store'])
        ->middleware('checkpermission:10,2')
        ->name('customer.store');

    // 'edit' metodu için 'checkpermission:10,3' middleware'i uygulandı
    Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])
        ->middleware('checkpermission:10,3')
        ->name('customer.edit');

    // 'update' metodu için 'checkpermission:10,3' middleware'i uygulandı
    Route::patch('/customer/{customer}', [CustomerController::class, 'update'])
        ->middleware('checkpermission:10,3')
        ->name('customer.update');

    // 'show' metodu için 'checkpermission:10,1' middleware'i uygulandı
    Route::get('/customer/{customer}', [CustomerController::class, 'show'])
        ->middleware('checkpermission:10,1')
        ->name('customer.show');

    // 'destroy' metodu için 'checkpermission:10,4' middleware'i uygulandı
    Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])
        ->middleware('checkpermission:10,4')
        ->name('customer.destroy');

    // Diğer işlemler için ek middleware'ler
    Route::get('/customer/changeStatusFalse/{id}', [CustomerController::class, 'changeStatusFalse'])
        ->middleware('checkpermission:10,3')
        ->name('customer.changeStatusFalse');

    Route::get('/customer/changeStatusTrue/{id}', [CustomerController::class, 'changeStatusTrue'])
        ->middleware('checkpermission:10,3')
        ->name('customer.changeStatusTrue');

    Route::get('/customer/deleteFile/{id}', [CustomerController::class, 'deleteFile'])
        ->middleware('checkpermission:10,3')
        ->name('customer.deleteFile');

    Route::get('/customer/order_up/{id}', [CustomerController::class, 'changeOrderUp'])
        ->middleware('checkpermission:10,3')
        ->name('customer.changeOrderUp');

    Route::get('/customer/order_down/{id}', [CustomerController::class, 'changeOrderDown'])
        ->middleware('checkpermission:10,3')
        ->name('customer.changeOrderDown');
});

