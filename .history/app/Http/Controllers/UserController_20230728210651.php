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
            return redirect()->route('dangki');
        } else{
            return redirect()->back()->withError('Email hoặc mật khẩu bạn nhập không đúng');
        }
    }
    // function register(Request $req){
    //     $validateValue= $req->validate([
    //         'ten' => 'required',
    //         'email' => 'required|email|unique:user',
    //         'password' => 'required',
    //         'repeatPassword' => 'required|same:password',
    //     ],[
    //         'email.required' => "Vui lòng nhập email",
    //         'email.email' => "Vui lòng nhập đúng định dạng email",
    //         'email.unique' => "Email đã được đăng ký",
    //         'password.required' => "Vui lòng nhập password",
    //         'repeatPassword.required' => "Vui lòng nhập lại password",
    //         'repeatPassword.same' => "Nhập lại mật khẩu không khớp",
    //     ]);
    //     $validateValue['password'] = bcrypt($validateValue['password']);
    //     $user = User::Create($validateValue);
    //     Auth::login($user);
    //     return redirect('admin');
    // }

    function logout(){
        Auth::logout();
        redirect('dangnhap');

    }
}
