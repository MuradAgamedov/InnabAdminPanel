<?php

use Illuminate\Support\Facades\Route;
use Modules\BlogContent\Http\Controllers\BlogContentController;
use Modules\BlogContent\Http\Controllers\BlogContentApiController;
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
    // 'delete_selected_items' metodu için 'checkpermission:7' middleware'i uygulandı
    Route::post('blogcontent/delete_selected_items', [BlogContentController::class, 'delete_selected_items'])
        ->middleware('checkpermission:17,4')
        ->name('blogcontent.delete_selected_items');
});



Route::prefix('{locale}')->group(function () {
    Route::get('/get_blogcontent/{slug}', [BlogContentApiController::class, 'get_blogcontent'])->name('blogcontent.get_name');
});
