<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use \App\Http\Requests\RuleNhapTin;
use App\Models\LoaiTin;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 5;
        $listtin=\App\Models\Tin::orderBy('ngayDang','desc')->paginate($perPage );
        return view("admin.tin", ['listtin'=>$listtin] );
    }

    
    public function ten($id)
    {
        $loai = LoaiTin::find($id);

        if ($loai) {
            return $loai->ten;
        }

        return 'Loại không tồn tại';
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tin_add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RuleNhapTin $request)
    {
        $arr = $request->post();
        $lang = ($request->has('lang'))? $arr['lang']:"";
        $tieuDe = ($request->has('tieuDe'))? $arr['tieuDe']:"";
        $tomTat = ($request->has('tomTat'))? $arr['tomTat']:"";
        $urlHinh = ($request->has('urlHinh'))? $arr['urlHinh']:"";
        $ngayDang = ($request->has('ngayDang'))? $arr['ngayDang']:"";
        $tags = ($request->has('tags'))? $arr['tags']:"";
        $id_loai = ($request->has('id_loai'))? $arr['id_loai']:"";
        $noiBat = ($request->has('hot'))? (int)$arr['hot']:0;
        $anHien = ($request->has('anhien'))? (int)$arr['anhien']:0;
        $noiDung = ($request->has('noiDung'))? $arr['noiDung']:"";
        $urlHinh = trim(strip_tags($urlHinh));

        $tin = new \App\Models\Tin;
        $tin->lang = $lang;
        $tin->tieuDe = $tieuDe;
        $tin->tomTat = $tomTat;
        $tin->urlHinh = $urlHinh;
        $tin->ngayDang = $ngayDang;
        $tin->tags = $tags;
        $tin->noiBat= $noiBat;
        $tin->anHien = $anHien;
        $tin->noiDung = $noiDung;
        $tin->idLT = $id_loai;
        $tin->save();
        return redirect('/admin/tin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $tin = \App\Models\Tin::find($id);
        if ($tin==null) {
            $request->session()->flash('thongbao', "Tin $id không tồn tại");
            return redirect("/thongbao");
        }
        return view("admin.tin_update", ['tin'=>$tin] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arr = $request->post();
        $lang = ($request->has('lang'))? $arr['lang']:"";
        $tieuDe = ($request->has('tieuDe'))? $arr['tieuDe']:"";
        $tomTat = ($request->has('tomTat'))? $arr['tomTat']:"";
        $urlHinh = ($request->has('urlHinh'))? $arr['urlHinh']:"";
        $ngayDang = ($request->has('ngayDang'))? $arr['ngayDang']:"";
        $tags = ($request->has('tags'))? $arr['tags']:"";
        $id_loai = ($request->has('id_loai'))? $arr['id_loai']:"";
        $noiBat = ($request->has('noiBat'))? (int)$arr['noiBat']:0;
        $anHien = ($request->has('anhien'))? (int)$arr['anhien']:0;
        $noiDung = ($request->has('noiDung'))? $arr['noiDung']:"";
        $tin = \App\Models\Tin::find($id);
        if ($tin == null) {
            $request->session()->flash('thongbao', "Loại tin $id không tồn tại");
            redirect("/thongbao");
        }
        
        $tin->lang = $lang;
        $tin->tieuDe = $tieuDe;
        $tin->tomTat = $tomTat;
        $tin->urlHinh = $urlHinh;
        $tin->ngayDang = $ngayDang;
        $tin->tags = $tags;
        $tin->noiBat= $noiBat;
        $tin->anHien = $anHien;
        $tin->noiDung = $noiDung;
        $tin->idLT = $id_loai;
        $tin->save();
        return redirect('/admin/tin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        \DB::table('tin')->where('id', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa tin');
        return redirect('/admin/tin');
    }
}
