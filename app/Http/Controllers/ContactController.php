<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $category = Category::all();
        return view('contact', compact('category'));
    }
}
