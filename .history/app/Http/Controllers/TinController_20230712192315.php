<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use Illuminate\Http\Request;

class TinController extends Controller
{
    function home(){
        return view('home');
    }
    function index(Request $request){
        $perpage= 12;
        $tukhoa = $request->has('tukhoa') ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $data = DB::table('tin')->select('id','tieuDe','ngayDang','urlHinh','tomTat')
        ->orderBy('ngayDang','desc')
        ->paginate($perpage)->withQueryString();
        $loai = DB::table('loaitin')->get();
        if ($tukhoa != "") {
            $listsp->appends(['tukhoa' => $tukhoa]);
        }
        return view('tinmoi',['data'=>$data,'loai'=>$loai,'tukhoa'=>$tukhoa]);
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        return view('tinct',['$id' => $id, 'tin' => $tin]);
    }
    function tinTL($idLT=0){
        $perpage= 12;
        $loai = DB::table('loaitin')->get();
        $listtin = DB::table('tin')
        ->where ('idLT', $idLT)
        ->paginate($perpage)->withQueryString();
        $tenloai = DB::table('loaitin')->where ('id', $idLT)->value('ten');
        return view('tintrongloai', ['loai'=>$loai,'id'=>$idLT, 'title'=>$tenloai , 'listtin'=>$listtin]);   
    }
}
