<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    public function hs(){
        return view("nhaphs");
    }
    function hs_store(Request $request){
        echo "Code xử lý lưu thông tin học sinh";
    }
}
