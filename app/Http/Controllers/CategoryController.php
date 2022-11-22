<?php

namespace App\Http\Controllers;

use App\Models\Book_category;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index($id){
        $cate = Book_category::where('id', '=', $id)->first();
        $detail = Book_category::where('category_id','=', $cate->id)->get();
        $categories = Category::where('id', '=', $id)->first();
        $category = Category::all();
        return view('category', compact('cate', 'detail', 'category', 'categories'));
    }
}
