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
        ->when($tukhoa != "", function ($query) use ($tukhoa) {
            return $query->where("tieuDe", "like", "%$tukhoa%");
        })
        ->paginate($perpage)->withQueryString();
        $loai = DB::table('loaitin')->get();
        if ($tukhoa != "") {
            $data->appends(['tukhoa' => $tukhoa]);
        }
        return view('tinmoi',['data'=>$data,'loai'=>$loai,'tukhoa'=>$tukhoa]);
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        $id_tin = $tin->id;
        $idLT = $tin->idLT;
        $tinlienquan = DB::table('tin')->
        where ('idLT', $idLT)->
        orderBy('ngay','desc')->
        limit(3)->get()->except($id_tin);
        return view('tinct',['$id' => $id, 'tin' => $tin, '$tinlienquan' => $tinlienquan]);
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
