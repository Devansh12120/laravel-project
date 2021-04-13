<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class busdetails extends Controller
{
    function store(Request $req){
        $destination=$req->destination;
        $start=$req->start;
        $end=$req->end;
        $adult=$req->adult;
        $children=$req->children;
        
        $f= new \App\Models\savebusdetails;
        $f->destination=$destination;
        $f->start=$start;
        $f->end=$end;
        $f->adult=$adult;
        $f->children=$children;
        $f->save();
        return "details have been added successfully";
    }
}
