<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bus extends Controller
{
    function index(){
        $road = DB::select('select * from buss');
        return view('choosebus',['road'=>$road] );
    }
}
