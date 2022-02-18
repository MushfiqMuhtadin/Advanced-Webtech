<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function signupget()
    {
        return view("signup");
    }
    public function signuppost(Request $request)
    {
        $validate = $request->validate([
            'address'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'email'=>'required',
            'password'=>'required'
        ],

        [
            'email.required'=>'Please enter your email',
            'address.required'=>'Please enter your address'
        ]
        );
        return "ok";
    }
    public function loginget()
    {
        return view("login");
    }
    public function loginpost(Request $request)
    {
        $validate = $request->validate(
            [
               
                'email' => 'required',
                'password' => 'required'
            ],

            [
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your address'
            ]
        );
        
        return "Login successful";
    }
}
