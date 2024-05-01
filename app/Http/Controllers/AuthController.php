<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // mengecek apakah login benar
        if (Auth::attempt($credentials)) {
            // mengecek apakah user ststus = active
            if(Auth::user()->status != 'active'){
                Session::flash('status', 'failed');
                Session::flash('message', 'Akun kamu belum Aktif. Tolong hubungi Admin');
                return redirect('/login');
            }
            $request->session()->regenerate();   
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
            // return redirect()->intended('dashboard');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'login Invalid');
        return redirect('/login');
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
