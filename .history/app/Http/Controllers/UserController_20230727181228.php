<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function login(Request $req){
        $req-> validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => "Vui lòng nhập email",
            'email.email' => "Vui lòng nhập đúng định dạng email",
            'password.required' => "Vui lòng nhập password",
        ]);
        if(Auth::attemp(['email'=> $req->email, 'password' => $req->password])){
            return redirect('admin');
        } else{
            return redirect()->back()->withError('Email hoặc mật khẩu bạn nhập không đúng');
        }
    }
}
