<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Central\DashboardController as CentralDashboardController;
use App\Http\Controllers\Central\SubscriptionController;

Route::domain(config('tenancy.central_domains')[0])->group(function () {
    Route::get('/', function () {
        return view('central.welcome');
    })->name('central.home');
    
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [CentralDashboardController::class, 'index'])
            ->name('central.dashboard');
    });
    Route::resource('subscriptions', SubscriptionController::class);
});