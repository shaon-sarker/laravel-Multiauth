<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('layouts.backend.admin.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=>$check['email'], 'password'=>$check['password']]))
        {
            return redirect()->route('admin.dashboard');
        }
        else{
            return back();
        }
    }

    public function Dashboard()
    {
        return view('layouts.backend.dashboard');
    }

    public function Adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.page');
    }

  

   

   



   
}
