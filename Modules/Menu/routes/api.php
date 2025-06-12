<?php

use Illuminate\Support\Facades\Route;
use Modules\Menu\Http\Controllers\MenuApiController;
use Modules\Menu\Http\Controllers\MenuController;
use App\Http\Controllers\SearchController;
Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('menu', MenuController::class)->names('menu');
});
Route::post('menu/delete_selected_items', [MenuController::class, 'delete_selected_items'])->name('menu.delete_selected_items');
Route::prefix('{locale}')->group(function () {
    Route::get('/get_menu', [MenuApiController::class, 'get_menu'])->name('menu.get_menu');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');