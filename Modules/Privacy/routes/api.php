<?php

use Illuminate\Support\Facades\Route;
use Modules\Privacy\Http\Controllers\PrivacyController;
use Modules\Privacy\Http\Controllers\PrivacyApiController;


Route::middleware(['web', 'auth'])->group(function () {
    Route::post('privacy/delete_selected_items', [PrivacyController::class, 'delete_selected_items'])
        ->middleware('checkpermission:7,4')
        ->name('privacy.delete_selected_items');
});



Route::prefix('{locale}')->group(function () {
    Route::get('/get_privacy', [PrivacyApiController::class, 'get_privacy'])->name('privacy.get_privacy');
});
