<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->as('admin.') 
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');
        // Các route khác
    });


