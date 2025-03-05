<?php

use Illuminate\Support\Facades\Route;
use Modules\AdminMenuLinks\Http\Controllers\AdminMenuLinksController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('adminmenulinks', AdminMenuLinksController::class)->names('adminmenulinks');
});
Route::post('adminmenulinks/delete_selected_items', [AdminMenuLinksController::class, 'delete_selected_items'])->name('adminmenulinks.delete_selected_items');
