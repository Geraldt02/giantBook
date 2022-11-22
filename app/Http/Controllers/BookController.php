<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function home(){
        // $bookData = Book::all();
        $bookData = Book::paginate(4);
        $category = Category::all();
        return view('home',compact('bookData', 'category'));
    }

    public function detail($id){
        $b = Book::where('id', '=', $id)->first();
        $category = Category::all();
        return view('bookDetail', compact('b', 'category'));
    }
}
