<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontrollersignup extends Controller
{
    function getDatasignup(Request $req)
    {
        # code...
        $req -> validate([
            'name' => 'required',
            'username'=> 'required|min:5|max:15',
            'password'=> 'required|min:5|max:15',
            'cpassword'=> 'required|min:5|max:15',
            'age' => 'required|digits:2',
            'email' => 'required',
            'contact' => 'required|digits:10',
            'gender' => 'required'    
        ]);
        
        $username = $req -> input("username");
        $password = $req -> input("password");
        echo "username :".$username."<br>"."password :".$password;
    }
}
    
