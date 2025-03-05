<?php

use Illuminate\Support\Facades\Route;
use Modules\UserRole\Http\Controllers\UserRoleController;

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
    Route::apiResource('userrole', UserRoleController::class)->names('userrole');
});
Route::post('userrole/delete_selected_items', [UserRoleController::class, 'delete_selected_items'])->middleware('checkpermission:6 ,4')->middleware('web')->name('userrole.delete_selected_items');
