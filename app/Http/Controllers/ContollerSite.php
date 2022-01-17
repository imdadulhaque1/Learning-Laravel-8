<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContollerSite extends Controller
{
    public function showMessage(){
        echo "<h1>From Controller page</h1>";
        return view("show-message");
    }

}
