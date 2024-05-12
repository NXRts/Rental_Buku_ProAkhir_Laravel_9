<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function profile(){
        return view('profile');
    }
    
    public function index(){
        $users = User::where('role_id', 2)->where('status', 'active')->get();
        return view('user', ['users' => $users]);
    }

    public function registeredUsers(){
        $registeredUsers = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('registered-user', ['registeredUsers' => $registeredUsers]);
    }

    public function show($slug) {
        $user = User::where('slug', $slug)->first();
        return view('user-detail', ['user' => $user]);
    }

    public function approve($slug){
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();

        return redirect('user-detail/'.$slug)->with('status', 'User Approved Successfully');
    }
}
