<?php

use Illuminate\Support\Facades\Route;
use Modules\Redirect\Http\Controllers\RedirectController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('redirect', RedirectController::class)->names('redirect');
});
Route::post('redirect/delete_selected_items', [RedirectController::class, 'delete_selected_items'])->name('redirect.delete_selected_items');

use Modules\Redirect\Http\Controllers\RedirectApiController;


Route::get('/get_redirect', [RedirectApiController::class, 'get_redirect'])->name('redirect.get_redirect');

