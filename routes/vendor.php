<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\VendorController;

Route::middleware(['auth', 'role:vendor'])
    ->prefix('vendor')
    ->as('vendor.')
    ->group(function () {
        Route::get('/dashboard', [VendorController::class, 'VendorDashboard'])->name('dashboard');
        // Các route khác
    });


