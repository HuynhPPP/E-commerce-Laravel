<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('backend.admin.admin_dashboard');
    }
    public function login()
    {
        return view('backend.admin.auth.');
    }
}
