Route::get('user/dashboard', [UserController::class, 'UserDashboard'])
    ->middleware(['auth', 'role:user'])
    ->name('user.dashboard');
