<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    //
    function create()
    {
        # code...
        return view('contact');
    }
    function store(Request $req){
        $name=$req->name;
        $email=$req->email;
        $phone=$req->phone;
        $subject=$req->subject;
        $message=$req->message;
        $req -> validate([
            'name'=>'required|min:5|max:20',
            'email'=> 'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=> 'required|numeric',
            'subject'=>'required|min:2|max:150',
            'message'=>'required|min:2|max:500'         
        ]);
        
        $f= new \App\Models\contacts;
        $f->name=$name;
        $f->email=$email;
        $f->contact=$phone;
        $f->subject=$subject;
        $f->message=$message;
        $f->save();
        return "details have been added successfully";
    }
}
