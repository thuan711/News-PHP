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
        $tinhot = DB::table('tin')->where('noibat', 0)->orderBy('xem', 'desc')->limit(2)->get();
        $bn = DB::table('tin')->orderBy('ngayDang')->limit(2)->get();
        $tinnb = DB::table('tin')->where('noibat', 1)->orderByDesc('xem', 'desc')->limit(1)->get();
        $data = DB::table('tin')->limit(6)->get();
        $xemnhieu = DB::table('tin')->orderBy('xem')->limit(3)->get();
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $loai = DB::table('loaitin')->get();
        $tinmoi = DB::table('tin')->orderBy('ngayDang','desc')->limit(3)->get();
        return view('home',['data'=>$data, 'bn'=>$bn,'tinhot'=>$tinhot,'xemnhieu'=>$xemnhieu,'tinnb'=>$tinnb, 'loai'=>$loai,'dbl'=>$dbl,'tinmoi'=>$tinmoi]);
    }
    function tin(){
        $loai = DB::table('loaitin')->get();
        $perpage= 12;
        $listtin = DB::table('tin')
        ->paginate($perpage)->withQueryString();
        return view('tinmoi', ['loai'=>$loai, 'listtin'=>$listtin]);
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        $id_tin = $tin->id;
        $idLT = $tin->idLT; 
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $tinlienquan = DB::table('tin')->
        where ('idLT', $idLT)->
        orderBy('ngayDang','desc')->
        limit(3)->get()->except($id_tin);
        $bl = \DB::table('binhluan')->where('idTin','=', $id)->get();
        return view('tinct',['$id' => $id, 'tin' => $tin,'dbl'=>$dbl, 'tinlienquan' => $tinlienquan, 'bl' => $bl]);
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
