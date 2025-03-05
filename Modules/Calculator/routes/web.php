<?php

use Illuminate\Support\Facades\Route;
use Modules\Calculator\Http\Controllers\CalculatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => "admin", 'middleware' => 'auth'], function () {
      // Index - Calculator list
    Route::get('/calculator', [CalculatorController::class, 'index'])->middleware('checkpermission:32,1')->name('calculator.index');

    // Create - Show form to create new calculator
    Route::get('/calculator/create', [CalculatorController::class, 'create'])->middleware('checkpermission:32,2')->name('calculator.create');

    // Store - Save new calculator
    Route::post('/calculator', [CalculatorController::class, 'store'])->middleware('checkpermission:32,21')->name('calculator.store');

   

    // Edit - Show form to edit existing calculator
    Route::get('/calculator/{id}/edit', [CalculatorController::class, 'edit'])->middleware('checkpermission:32,3')->name('calculator.edit');

    // Update - Update an existing calculator
    Route::patch('/calculator/{id}', [CalculatorController::class, 'update'])->middleware('checkpermission:32,3')->name('calculator.update');



    // Add_area route
    Route::post('/calculator/add_area', [CalculatorController::class, 'add_area'])->middleware('checkpermission:32,2')->name('calculator.add_area');

    // Delete specific routes
    Route::group(['prefix' => 'calculator'], function () {
        Route::get('/delete/{id}', [CalculatorController::class, 'delete'])->middleware('checkpermission:32,2')->name('calculator.delete');
    });
});
