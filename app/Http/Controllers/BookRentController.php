<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
            Session::flash('message', 'Cannot rent, the book is not available! '); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('book-rent');
        }
        else {
            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count(); 
            
            if($count >= 3) {
                Session::flash('message', 'Cannot rent, user has reach limit fo book'); 
                Session::flash('alert-class', 'alert-danger'); 
                return redirect('book-rent');
            }
            else {
                try {
                    DB::beginTransaction();
                    RentLogs::create($request->all());
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'not avaliable';
                    $book->save();
                    DB::commit();
    
                    Session::flash('message', 'Success'); 
                    Session::flash('alert-class', 'alert-success'); 
                    return redirect('book-rent');
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }
}
