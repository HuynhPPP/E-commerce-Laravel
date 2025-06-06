<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;

Route::get('user/dashboard', [UserController::class, 'UserDashboard'])
    ->middleware(['auth', 'role:user'])
    ->name('user.dashboard');
