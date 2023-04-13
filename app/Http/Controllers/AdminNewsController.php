<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    //
    public function add (){

        return view('adminnews.add');
    }
}
