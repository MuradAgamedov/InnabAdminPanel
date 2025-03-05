<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('admin', AdminController::class)->names('admin');
});


Route::middleware(['web', 'auth'])->group(function () {
    // 'delete_selected_items' metodu için 'checkpermission:4' middleware'i uygulandı
    Route::post('admin/delete_selected_items', [AdminController::class, 'delete_selected_items'])
        ->middleware('checkpermission:30,4')
        ->name('admin.delete_selected_items');
});
