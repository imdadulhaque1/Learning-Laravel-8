<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About()
    {
        // echo "This is from About Controller!";
        return view('about');
    }
}
