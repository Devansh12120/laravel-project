<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupcontroller extends Controller
{
    function create()
    {
        # code...
        return view('signup');
    }
    function store(Request $req){
        $firstname=$req->firstname;
        $lastname=$req->lastname;
        $gender=$req->gender;
        $dateofbirth=$req->dateofbirth;
        $code=$req->code;
        $phone=$req->phone;
        $email=$req->email;
        $password=$req->password;
        $street=$req->street;
        $address=$req->address;
        $zip=$req->zip;
        $stt=$req->stt;
        $city=$req->city;
        $country=$req->country;
        $req -> validate([
            'firstname'=>'required|min:5|max:20',
            'lastname'=>'required|min:3|max:20',
            'gender'=>'required|min:3',
            'dateofbirth'=>'required|before:today',
            'code'=>'required|size:2',
            'password'=>'required|min:6',
            'street'=>'required|min:2|max:20',
            'address'=>'required|min:5|max:120',
            'zip'=>'required|size:6',
            'stt'=>'required',
            'city'=>'required',
            'country'=>'required',
            'email'=> 'required|regex:/(.+)@(.+)\.(.+)/i',
            'checkbox' =>'required',
            'phone'=> 'required|numeric'         
        ]);
        $f= new \App\Models\signups;
        $f->firstname=$req->firstname;
        $f->lastname=$req->lastname;
        $f->gender=$req->gender;
        $f->dateofbirth=$req->dateofbirth;
        $f->code=$req->code;
        $f->phone=$req->phone;
        $f->email=$req->email;
        $f->password=$req->password;
        $f->street=$req->street;
        $f->address=$req->address;
        $f->zip=$req->zip;
        $f->stt=$req->stt;
        $f->city=$req->city;
        $f->country=$req->country;
        $f->save();
        return "details have been added successfully";
    }
}
