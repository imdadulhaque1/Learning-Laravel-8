<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAbout extends Controller
{
    public function About(){
        // echo "This is from About!";
        return view('about');       //"about" is the name of view's components to view
    }
}
