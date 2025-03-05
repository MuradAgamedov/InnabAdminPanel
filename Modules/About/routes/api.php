<?php

use Illuminate\Support\Facades\Route;
use Modules\About\Http\Controllers\AboutController;
use Modules\About\Http\Controllers\AboutApiController;


Route::middleware(['web', 'auth'])->group(function () {
    // 'delete_selected_items' metodu için 'checkpermission:4' middleware'i uygulandı
    Route::post('about/delete_selected_items', [AboutController::class, 'delete_selected_items'])
        ->middleware('checkpermission:5,4')
        ->name('about.delete_selected_items');
});
Route::prefix('{locale}')->group(function () {
    Route::get('/get_about', [AboutApiController::class, 'get_about'])->name('about.get_about');
});


Route::get('/simple-route', function () {
    return 'OK';
});
