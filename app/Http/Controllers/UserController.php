<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function profile(){
        
        $rentlogs = RentLogs::with('user', 'book')->where('user_id', Auth::User()->id)->get();
        return view('profile', ['rent_logs' => $rentlogs]);
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
        $rentlogs = RentLogs::with('user', 'book')->where('user_id', $user->id)->get();
        return view('user-detail', ['user' => $user, 'rent_logs' => $rentlogs]);
    }

    public function approve($slug){
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();

        return redirect('user-detail/'.$slug)->with('status', 'User Approved Successfully');
    }

    public function delete($slug){
        $user = User::where('slug', $slug)->first();
        return view('user-delete', ['user' => $user]);
    }
    public function destroy($slug){
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('users')->with('status', 'User Deleted Successfully');
    }

    public function bannedUser(){
        $bannedUser = User::onlyTrashed()->get();
        return view('user-banned', ['bannedUser' => $bannedUser]);
    }

    public function restore($slug){
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('users')->with('status', 'User Restored Successfully');
    }
}
