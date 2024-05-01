<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        dd('ini halaman buku');
    }
    // public function index(request $request){
    //     $request->session()->flush();
    // }
}
