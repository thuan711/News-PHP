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
        if(Auth::attempt(['email'=> $req->email, 'password' => $req->password])){
            return redirect('admin');
        } else{
            return redirect()->back()->withError('Email hoặc mật khẩu bạn nhập không đúng');
        }
    }
    function register(Request $req){
        $req->validate([
            'ten' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required',
            'repeatPassword' => 'required|same:password',
        ],[
            'email.required' => "Vui lòng nhập email",
            'email.email' => "Vui lòng nhập đúng định dạng email",
            'email.unique' => "Email đã được đăng ký",
            'password.required' => "Vui lòng nhập password",
            'repeatPassword.required' => "Vui lòng nhập lại password",
            'repeatPassword.same' => "Nhập lại mật khẩu không khớp",
        ]);
    }

    function logout(){
        Auth::logout();
        redirect('dangnhap');

    }
}
