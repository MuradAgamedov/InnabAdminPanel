<?php

use Illuminate\Support\Facades\Route;
use Modules\News\Http\Controllers\NewsController;
use Modules\News\Http\Controllers\NewsApiController;

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
    Route::post('news/delete_selected_items', [NewsController::class, 'delete_selected_items'])
        ->middleware('checkpermission:29,4')
        ->name('news.delete_selected_items');

    Route::get('news/pin/{id}', [NewsController::class, 'pin'])
        ->middleware('checkpermission:29,3')
        ->name('news.pin');

    Route::get('news/unpin/{id}', [NewsController::class, 'unpin'])
        ->middleware('checkpermission:29,3')
        ->name('news.unpin');
});





Route::prefix('{locale}')->group(function () {
    Route::get('/get_news', [NewsApiController::class, 'get_news'])->name('news.get_news');
    Route::get('/get_news/{slug}', [NewsApiController::class, 'get_one_news'])->name('news.get_one_news');
});
