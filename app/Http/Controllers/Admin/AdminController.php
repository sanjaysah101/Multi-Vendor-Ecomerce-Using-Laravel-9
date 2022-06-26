<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard'); //path resources/views/admin/dashboard.blade.php
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message', 'Invalid Email or Password');
            }
        }
        return view('admin.login'); //path resources/views/admin/dashboard.blade.php
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
