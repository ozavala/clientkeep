<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\ClientController;

Route::middleware(['web', 'tenant'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('tenant.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('tenant.dashboard');

    // Rutas protegidas por autenticación tenant
    Route::middleware(['auth:tenant'])->group(function () {
        Route::resource('clients', ClientController::class);
    });
});