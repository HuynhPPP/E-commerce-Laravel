<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard()
    {
        return view('frontend.vendor.vendor_dashboard');
    }
}
