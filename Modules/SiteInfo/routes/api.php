<?php

use App\Http\Controllers\ContactAdminPanelController;
use Illuminate\Support\Facades\Route;
use Modules\SiteInfo\Http\Controllers\SiteInfoController;
use Modules\SiteInfo\Http\Controllers\SiteInfoApiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleDatasController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VenDiagramController;
use Modules\SiteInfo\Http\Controllers\Api\UsefulForYouIconApiController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::post('siteinfo/delete_selected_items', [SiteInfoController::class, 'delete_selected_items'])
        ->middleware('checkpermission:6,4')
        ->name('siteinfo.delete_selected_items');
});




Route::prefix('{locale}')->group(function () {
    Route::get('/get_siteinfo', [SiteInfoApiController::class, 'get_siteinfo'])->name('siteinfo.get_siteinfo');

    Route::get('/search_trainings/{param}', [SearchController::class, 'search_trainings'])->name('search_trainings');
    Route::get('/search_blogs/{param}', [SearchController::class, 'search_blogs'])->name('search_blogs');

    Route::get('/get_venn_diagram_data', [VenDiagramController::class, 'get_venn_diagram_data'])->name('get_venn_diagram_data');
});


// Route::post('/contactform/post', [ContactController::class, 'contactForm'])->name('contact.post');
// Route::post('/vebinar/post', [ContactController::class, 'vebinar'])->name('contact.vebinar');
// Route::post('/workshop/post', [ContactController::class, 'workshop'])->name('contact.workshop');
// Route::post('/carrier_and_schoolarship/post', [ContactController::class, 'carrier_and_schoolarship'])->name('contact.carrier_and_schoolarship');


Route::post('/contactform/post', [ContactAdminPanelController::class, 'contactForm'])->name('contact.post');
Route::post('/vebinar/post', [ContactAdminPanelController::class, 'vebinar'])->name('contact.vebinar');
Route::post('/workshop/post', [ContactAdminPanelController::class, 'workshop'])->name('contact.workshop');
Route::post('/carrier_and_schoolarship/post', [ContactAdminPanelController::class, 'carrier_and_schoolarship'])->name('contact.carrier_and_schoolarship');


Route::get('/google_datas/get', [GoogleDatasController::class, 'google_datas'])->name('google_datas.get');


Route::prefix('v1')->group(function () {
    Route::get('/useful-icons', [UsefulForYouIconApiController::class, 'index']);
});



