<?php

namespace App\Http\Controllers\web;


use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.user.dashboard.main');
    }
    
}

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
   
    //     return redirect("login")->withSuccess('are not allowed to access');
    // }