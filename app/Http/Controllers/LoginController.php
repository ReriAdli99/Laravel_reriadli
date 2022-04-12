<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }
    public function login(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){  
            if(Auth()->user()->role == 'admin'){
                return redirect('/rs')->with('success','Login Sukses !!');
            }
            return redirect('/dashboards')->with('success','Login Sukses !!');
        }
        else{
            Session::flash('gagal','username atau Password anda salah!');
            return redirect('/')->withInput()->with('error','Gagal Login !!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
