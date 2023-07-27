<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function sellerindex()
    {
        return view('seller.login');
    }

    public function sellerlogin(Request $request)
    {
        $check = $request->all();
        if(Auth::guard('seller')->attempt(['email'=>$check['email'], 'password'=>$check['password']]))
        {
            return redirect()->route('seller.dashboard');
        }
        else{
            return back();
        }
    }

    public function sellerdashboard()
    {
        return view('layouts.backend.dashboard');
    }

    public function sellerlogout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login.page');
    }
}
