<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests\RuleNhapSV;
class HsController extends Controller
{
    public function hs(){
        return view("nhaphs");
    }
    public function hs_store(Request $request) {
        $request-> validate( [
            'hoten' => ['required','min:3','max:20'],
            'tuoi'=>'required|nteger|min:16|max:100',
            'ngaysinh'=>['required','date'],
        ]
        ) ;
        echo "Code xử lý lưu thông tin học sinh";
    
    }
    public function sv(){
        return view("nhapsv");
        }
        function sv_store(RuleNhapSV $request){
        echo "Code xử lý lưu thông tin sinh viên";
        }
}
