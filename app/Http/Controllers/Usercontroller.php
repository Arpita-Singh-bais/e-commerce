<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
  
   
    function user(){
        return view('user.index');
    }
}
