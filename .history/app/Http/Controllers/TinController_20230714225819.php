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
        $tinhot = \DB::table('tin')->where('noibat', 0)->orderBy('xem', 'desc')->limit(2)->get();
        $tinnb = \DB::table('tin')->where('noibat', 1)->orderByDesc('xem', 'desc')->limit(1)->get();
        $tukhoa = $request->has('tukhoa') ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $data = DB::table('tin')->limit(6)->get();
        $loai = DB::table('loaitin')->get();
        $tinmoi = DB::table('tin')->orderBy('ngayDang','desc')->limit(3)->get();
        $tinmoi = DB::table('tin')->
        orderBy('ngayDang','desc')->
        limit(3)->get();
        return view('home',['data'=>$data,'tinhot'=>$tinhot,'tinnb'=>$tinnb, 'loai'=>$loai,'tukhoa'=>$tukhoa,'tinmoi'=>$tinmoi]);
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        $id_tin = $tin->id;
        $idLT = $tin->idLT;
        $tinlienquan = DB::table('tin')->
        where ('idLT', $idLT)->
        orderBy('ngayDang','desc')->
        limit(3)->get()->except($id_tin);
        $bl = \DB::table('binhluan')->where('idTin','=', $id)->get();
        return view('tinct',['$id' => $id, 'tin' => $tin, 'tinlienquan' => $tinlienquan, 'bl' => $bl]);
    }
    function tinTL($idLT=0){
        $loai = DB::table('loaitin')->get();
        $perpage= 12;
        $listtin = DB::table('tin')
        ->where ('idLT', $idLT)
        ->paginate($perpage)->withQueryString();
        $tenloai = DB::table('loaitin')->where ('id', $idLT)->value('ten');
        return view('tintrongloai', ['loai'=>$loai,'id'=>$idLT, 'title'=>$tenloai , 'listtin'=>$listtin]);   
    }
}
