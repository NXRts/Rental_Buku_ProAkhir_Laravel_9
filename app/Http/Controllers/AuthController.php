<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
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

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function registerProcess(Request $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil registrasi, Harap tunggu persetujuan dari Admin');
        return redirect('register');
    }
}
