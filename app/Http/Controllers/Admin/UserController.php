<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends AuthController
{
    public function index()
    {
        return view('pages.admin.user_management.index');
    }
}
