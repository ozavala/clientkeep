<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\DashboardController as TenantDashboardController;

Route::middleware(['web', 'tenant'])->group(function () {
    Route::get('/', function () {
        return view('tenant.welcome');
    })->name('tenant.home');
    
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [TenantDashboardController::class, 'index'])
            ->name('tenant.dashboard');
    });
});