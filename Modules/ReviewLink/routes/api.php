<?php

use Illuminate\Support\Facades\Route;
use Modules\ReviewLink\Http\Controllers\ReviewLApiinkController;
use Modules\ReviewLink\Http\Controllers\ReviewLinkController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('reviewlink', ReviewLinkController::class)->names('reviewlink');

});
Route::post('reviewlink/delete_selected_items', [ReviewLinkController::class, 'delete_selected_items'])->name('reviewlink.delete_selected_items');
Route::get('get_review_link', [ReviewLApiinkController::class, 'get_review_link'])->name('reviewlink.get_review_link');
