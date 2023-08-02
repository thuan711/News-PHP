<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    function login(){
        return view('myauth.login');
    }
    function login_(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => "Vui lòng nhập email",
            'email.email' => "Vui lòng nhập đúng định dạng email",
            'password.required' => "Vui lòng nhập password",
        ]);
        if(Auth::attempt(['email'=> $req->email, 'password' => $req->password])){
            return redirect()->route('admin-show');
        } else{
            return redirect()->back()->withError('Email hoặc mật khẩu bạn nhập không đúng');
        }
    }
    function register(Request $req){
        
        return redirect('admin');
    }

    function logout(){
        Auth::logout();
        return redirect()->route('dangnhap');
    }
}
