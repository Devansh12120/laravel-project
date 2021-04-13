<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class train extends Controller
{
    function index(){
        $trains = DB::select('select * from trains');
        return view('choosetrain',['trains'=>$trains] );
    }
}
