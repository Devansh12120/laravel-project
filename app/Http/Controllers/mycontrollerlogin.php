<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontrollerlogin extends Controller
{
    function getDatalogin(Request $req)
    {
        # code...
        $req -> validate([
            'email'=> 'required|min:5|max:15',
            'password'=> 'required|min:5|max:15'
            
        ]);
        
        $email = $req -> input("email");
        $password = $req -> input("password");
        echo "email :".$email."<br>"."password :".$password;
    }
    
}
    
