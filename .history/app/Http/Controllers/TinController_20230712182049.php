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
    function index(){
        $data = DB::table('tin')->select('id','tieuDe','ngayDang','urlHinh','tomTat')
        ->orderBy('ngayDang','desc')->limit(10)
        ->get();
        $loai = DB::table('loaitin')->get();
        return view('tinmoi',['data'=>$data,'loai'=>$loai]);
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
//     function chitiet($id=0) {
//         $tt = \DB::table('tin')
//         ->Join('loaitin', 'tin.idLT', '=', 'loaitin.id')
//         ->select('tin.id', 'tin.tieuDe','tin.urlHinh', 'tin.noiDung', 'loaitin.ten')
//         ->where('tin.id', '=', $id)->first();
//         if($tt !== null){
//             $id = $tt->id;
//             return view('tinct', ['id'=>$id, 'tt'=> $tt]);
//         }else{
//             echo "Không có dữ liệu";
//     }
// }
}
