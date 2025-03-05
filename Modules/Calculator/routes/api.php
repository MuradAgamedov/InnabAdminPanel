<?php

use Illuminate\Support\Facades\Route;
use Modules\Calculator\Http\Controllers\CalculatorController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('calculator', CalculatorController::class)->names('calculator');
});
Route::post('calculator/delete_selected_items', [CalculatorController::class, 'delete_selected_items'])->name('calculator.delete_selected_items');


Route::prefix('{locale}')->group(function () {
    Route::get('calculator/getCalculatorDatas', [CalculatorController::class, 'getCalculatorDatas'])->name('calculator.getCalculatorDatas');
});
