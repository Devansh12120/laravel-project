<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    function create()
    {
        # code...
        return view('travel');
    }
    function store(Request $req){
        $name=$req->name;
        $email=$req->email;
        $subject=$req->subject;
        $message=$req->message;
        $req -> validate([
            'name'=>'required|min:5|max:20',
            'email'=> 'required|regex:/(.+)@(.+)\.(.+)/i',
            'subject'=>'required|min:2|max:150',
            'message'=>'required|min:2|max:500'         
        ]);
        
        $f= new \App\Models\indiacontacts;
        $f->name=$name;
        $f->email=$email;
        $f->subject=$subject;
        $f->message=$message;
        $f->save();
        return view('travel');
    }
}
