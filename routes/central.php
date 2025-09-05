<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Central\HomeController as CentralHomeController;

Route::domain(config('tenancy.central_domains')[0])->group(function () {
    Route::get('/', function () {
        return view('central.welcome');
    })->name('central.home');

     Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [CentralHomeController::class, 'index'])
            ->name('central.dashboard');
    });
   
});