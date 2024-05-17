<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookRentController extends Controller
{
    public function index(){
        $user = User::where('id', '!=', 1)->get();
        $books = Book::all();
        return view('book-rent', ['user' => $user, 'books' => $books]);
    }
}
