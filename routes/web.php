<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebinarFormController;
use App\Http\Controllers\WorkshopFormController;
use App\Http\Controllers\CarrierAndScholarshipFormController;

Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/logout', [LogoutController::class, 'logout'])->name('admin.logout')->middleware('auth');


Route::get('/contact-forms', [ContactFormController::class, 'index'])->name('contact-forms.index');
Route::get('/contact-forms/{id}/delete', [ContactFormController::class, 'destroy'])->name('contact-forms.destroy');
Route::get('/contact-forms/export/csv', [ContactFormController::class, 'exportCsv'])->name('contact-forms.export.csv');








Route::get('/webinar-forms', [WebinarFormController::class, 'index'])->name('webinar-forms.index');
Route::get('/webinar-forms/{id}/delete', [WebinarFormController::class, 'destroy'])->name('webinar-forms.destroy');
Route::get('/webinar-forms/export/csv', [WebinarFormController::class, 'exportCsv'])->name('webinar-forms.export.csv');



Route::get('/workshop-forms', [WorkshopFormController::class, 'index'])->name('workshop-forms.index');
Route::get('/workshop-forms/{id}/delete', [WorkshopFormController::class, 'destroy'])->name('workshop-forms.destroy');
Route::get('/workshop-forms/export/csv', [WorkshopFormController::class, 'exportCsv'])->name('workshop-forms.export.csv');



Route::get('/carrier-scholarship-forms', [CarrierAndScholarshipFormController::class, 'index'])->name('carrier-forms.index');
Route::get('/carrier-scholarship-forms/{id}/delete', [CarrierAndScholarshipFormController::class, 'destroy'])->name('carrier-forms.destroy');

Route::get('/carrier-forms/export/csv', [CarrierAndScholarshipFormController::class, 'exportCsv'])->name('carrier-forms.export.csv');




Route::get('/simple-route', function () {
    return 'OK';
});
