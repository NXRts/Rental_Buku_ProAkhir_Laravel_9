<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

    public function store(Request $request){
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();

        $book = Book::findOrFail($request->book_id)->only('status');
       
        if($book['status'] != 'in stock'){
            dd("Buku sedang dipinjam");
        }
        dd("buku boleh dipinjam");
    }
}
