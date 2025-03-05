<?php

use Illuminate\Support\Facades\Route;
use Modules\SiteInfo\Http\Controllers\SiteInfoController;
use Modules\SiteInfo\Http\Controllers\SiteInfoApiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleDatasController;
Route::middleware(['web', 'auth'])->group(function () {
    Route::post('siteinfo/delete_selected_items', [SiteInfoController::class, 'delete_selected_items'])
        ->middleware('checkpermission:6,4')
        ->name('siteinfo.delete_selected_items');
});




Route::prefix('{locale}')->group(function () {
    Route::get('/get_siteinfo', [SiteInfoApiController::class, 'get_siteinfo'])->name('siteinfo.get_siteinfo');
});
Route::post('/contactform/post', [ContactController::class, 'contactForm'])->name('contact.post');
Route::post('/vebinar/post', [ContactController::class, 'vebinar'])->name('contact.vebinar');
Route::post('/workshop/post', [ContactController::class, 'workshop'])->name('contact.workshop');
Route::post('/carrier_and_schoolarship/post', [ContactController::class, 'carrier_and_schoolarship'])->name('contact.carrier_and_schoolarship');
Route::get('/google_datas/get', [GoogleDatasController::class, 'google_datas'])->name('google_datas.get');