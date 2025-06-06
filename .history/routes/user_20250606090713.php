<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

Route::get('user/dashboard', [UserController::class, 'UserDashboard'])
    ->middleware(['auth', 'role:user'])
    ->name('user.dashboard');
