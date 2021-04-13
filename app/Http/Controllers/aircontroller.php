<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aircontroller extends Controller
{
    //
    function index(){
        $air= \App\Models\air::all();
        return view('air',['air'=>$air] );
    }
}
