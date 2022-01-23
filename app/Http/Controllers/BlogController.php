<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogStatus(){
        echo "This is BlogStatus Post!";
        return view('blog-status');
    }
}
