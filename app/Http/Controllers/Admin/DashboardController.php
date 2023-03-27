<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard.main');
    }  
}
