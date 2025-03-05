<?php

use Illuminate\Support\Facades\Route;
use Modules\Lang\Http\Controllers\LangController;
use Modules\Lang\Http\Controllers\LangApiController;
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
    Route::post('lang/delete_selected_items', [LangController::class, 'delete_selected_items'])
        ->middleware('checkpermission:4,4')
        ->name('lang.delete_selected_items');
});


    Route::get('/get_langs', [LangApiController::class, 'get_langs'])->name('lang.get_langs');
    Route::get('/{locale}/get_langs/{group}', [LangApiController::class, 'get_langs_group'])->name('lang.get_langs_group');