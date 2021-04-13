<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hoteldetails extends Controller
{
    function store(Request $req){
        $destination=$req->destination;
        $checkin=$req->checkin;
        $checkout=$req->checkout;
        $adults=$req->adults;
        $children=$req->children;
        
        $f= new \App\Models\savehoteldetails;
        $f->destination=$destination;
        $f->checkin=$checkin;
        $f->checkout=$checkout;
        $f->adults=$adults;
        $f->children=$children;
        $f->save();
        return "details have been added successfully";
    }
}
