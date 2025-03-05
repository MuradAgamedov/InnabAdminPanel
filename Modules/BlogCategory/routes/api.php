<?php

use Illuminate\Support\Facades\Route;
use Modules\BlogCategory\Http\Controllers\BlogCategoryController;

use Modules\BlogCategory\Http\Controllers\BlogCategoryApiController;
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




Route::middleware(['web', 'auth'])->group(function () {
    // 'delete_selected_items' metodu için 'checkpermission:6' middleware'i uygulandı
    Route::post('blogcategory/delete_selected_items', [BlogCategoryController::class, 'delete_selected_items'])
        ->middleware('checkpermission:15,4')
        ->name('blogcategory.delete_selected_items');
});



Route::prefix('{locale}')->group(function () {
    Route::get('/get_blogcategory', [BlogCategoryApiController::class, 'get_blogcategory'])->name('blogcategory.get_name');
});
