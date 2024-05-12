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
        $users = User::where('role_id', 2)->get();
        return view('user', ['users' => $users]);
    }
}
