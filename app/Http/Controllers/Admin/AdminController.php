<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard'); //path resources/views/admin/dashboard.blade.php
    }
    public function login(){
        return view('admin.login'); //path resources/views/admin/dashboard.blade.php
    }

}
