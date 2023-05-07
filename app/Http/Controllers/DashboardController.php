<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AuthController
{
    public function index()
    {
        $user_type = Auth::user()->user_type;

        if($user_type == 0){
            return view('pages.cashier.dashboard.index');
        }else if($user_type == 1){
            return view('pages.admin.dashboard.index');
        }else if($user_type == 2){
            return view('pages.customer.dashboard.index');
        }else if($user_type == 3){
            return view('pages.chef.dashboard.index');
        }
    }
}
