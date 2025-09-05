<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Central\Auth\RegisteredUserController;
use App\Http\Controllers\Central\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Central\TenantController;

Route::domain(config('tenancy.central_domains')[0])->group(function () {
    Route::get('/', function () {
        return view('central.welcome');
    })->name('central.home');

    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('central.register');

    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('central.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::middleware('auth:central')->group(function () {
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('central.logout');
            
        Route::get('/dashboard', function () {
            return view('central.dashboard');
        })->name('central.dashboard');

        Route::resource('tenants', TenantController::class);
    });
});