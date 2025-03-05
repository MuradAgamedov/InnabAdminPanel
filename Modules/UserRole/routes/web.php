<?php

use Illuminate\Support\Facades\Route;
use Modules\UserRole\Http\Controllers\UserPermissionController;
use Modules\UserRole\Http\Controllers\UserRoleController;

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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // UserRole routes
    Route::get('userrole', [UserRoleController::class, 'index'])->name('userrole.index');
    Route::get('userrole/create', [UserRoleController::class, 'create'])->name('userrole.create');
    Route::post('userrole', [UserRoleController::class, 'store'])->name('userrole.store');
    Route::get('userrole/{userrole}/edit', [UserRoleController::class, 'edit'])->name('userrole.edit');
    Route::match(['put', 'patch'], 'userrole/{userrole}', [UserRoleController::class, 'update'])->name('userrole.update');

    // UserPermission routes
    Route::get('permission/{role_id?}', [UserPermissionController::class, 'index'])->name('permission.list');
    Route::get('permission/create/{role_id?}', [UserPermissionController::class, 'create'])->name('permission.create');
    Route::post('permission/store/{role_id?}', [UserPermissionController::class, 'store'])->name('permission.store');
    Route::get('permission/edit/{role_id?}/{page_id?}', [UserPermissionController::class, 'edit'])->name('permission.edit');
    Route::post('permission/update/{role_id?}/{page_id?}', [UserPermissionController::class, 'update'])->name('permission.update');
});
