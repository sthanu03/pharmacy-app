<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            if(Auth::user()->user_type == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
            {
                return redirect('cashier/dashboard');
            }
            else if(Auth::user()->user_type ==3)
            {
                return redirect('manager/dashboard');
            }
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        if(Auth::attempt(['email'=> $request->email, 'password'=>$request->password], true))
        {
            if(Auth::user()->user_type == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
            {
                return redirect('cashier/dashboard');
            }
            else if(Auth::user()->user_type ==3)
            {
                return redirect('manager/dashboard');
            }
        }
        else
        {
            return redirect()->back->with('error', 'Please enter correct email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
