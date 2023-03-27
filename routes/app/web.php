<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\AuthController;
use App\Http\Controllers\web\DashboardController;



Route::group(['domain' => ''], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


    Route::prefix('')->name('web.')->group(function () {
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'dashboard']);
    });
});
