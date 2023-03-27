<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['domain' => ''], function () {
    Route::get('admin/login', [AuthController::class, 'index'])->name('login');
    Route::get('admin/signout', [AuthController::class, 'signOut'])->name('admin.signout');
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'dashboard']);


            //Create Product
            Route::get('main',[ProductController::class, 'index'])->name('main');
            Route::get('create',[ProductController::class, 'create'])->name('create');
            Route::post('create',[ProductController::class, 'store'])->name('store');
            Route::get('show',[ProductController::class, 'store'])->name('show');
            Route::get('edit',[ProductController::class, 'edit'])->name('edit');
            Route::patch('update',[ProductController::class, 'update'])->name('update');
            Route::delete('destroy',[ProductController::class, 'destroy'])->name('destroy');

            
            
    });
});

