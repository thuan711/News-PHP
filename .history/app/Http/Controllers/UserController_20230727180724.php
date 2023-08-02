<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $req){
        $req-> validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => ""
        ])
    }
}
