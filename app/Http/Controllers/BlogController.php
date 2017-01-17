<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($category){
    	return view('blog.category')->with('category',$category);
    }
}
