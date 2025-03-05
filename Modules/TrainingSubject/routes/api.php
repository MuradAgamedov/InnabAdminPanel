<?php

use Illuminate\Support\Facades\Route;
use Modules\TrainingSubject\Http\Controllers\TrainingSubjectController;
use Modules\TrainingSubject\Http\Controllers\TrainingSubjectApiConteoller;
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
    Route::post('trainingsubject/delete_selected_items', [TrainingSubjectController::class, 'delete_selected_items'])
        ->middleware('checkpermission:24,4')
        ->name('trainingsubject.delete_selected_items');
});


Route::prefix('{locale}')->group(function () {
    Route::get('/get_trainingsubject/{id}', [TrainingSubjectApiConteoller::class, 'get_trainingsubject'])->name('trainingsubject.get_trainingsubject');
});
