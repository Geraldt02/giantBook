<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function index(){
        $publisher = Publisher::all();
        $category = Category::all();
        return view('publisher', compact('publisher', 'category'));
    }

    public function detail($id){
        $publisher = Publisher::where('id', 'like', $id)->first();
        $category = Category::all();
        return view('publisherDetail', compact('publisher', 'category'));
    }
}
