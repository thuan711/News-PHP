<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use \App\Http\Requests\RuleNhapLoaiTin;
class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 5;
        $loaitin = \App\Models\Loaitin::paginate($perPage);
        return view("admin.loaitin", ['loaitin'=>$loaitin] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.loait_add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RuleNhapLoaiTin $request)
    {
        $arr = $request->post();
        $lang = ($request->has('lang')) ? $arr['lang'] : "";
        $ten = ($request->has('ten')) ? $arr['ten'] : "";
        $thutu = ($request->has('thutu')) ? $arr['thutu'] : "";
        $anhien = ($request->has('anhien'))? (int)$arr['anhien']:0;
        $ten = trim(strip_tags($ten));
        $thutu = (int) $thutu;
        $loai = new \App\Models\LoaiTin;
        $loai->lang = $lang;
        $loai->ten = $ten;
        $loai->thuTu = $thutu;
        $loai->anHien = $anhien;
        
        $loai->save();
        return redirect('/admin/loaitin');
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
    public function edit(Request $request,$id=0)
    {
        $loaitin = \App\Models\LoaiTin::find($id);
        if ($loaitin==null) {
            $request->session()->flash('thongbao', "Loại sp $id không có");
            return redirect("/thongbao");
        }
        return view("admin.loait_update", ['loaitin'=>$loaitin] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arr = $request->post();
        $ten = ($request->has('ten'))? $arr['ten']:"";
        // $soSP = ($request->has('soSP'))? $arr['soSP']:"";
        $ten = trim(strip_tags($ten));
        // $soSP = (int) $soSP;
        $loai = \App\Models\LoaiTin::find($id);
        if ($loai == null) {
            $request->session()->flash('thongbao', "Loại sản phẩm $id không tồn tại");
            redirect("/thongbao");
        }
        $loai->ten = $ten;
        // $loai->soSP = $soSP;
        $loai->save();
        return redirect('/admin/loaitin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lt = \App\Models\LoaiTin::find($id);
        if ($lt==null) {
            $request->session()->flash('thongbao', "Sản phẩm $id không tồn tại");
            redirect("/thongbao");
        }
        $lt->delete();
        return redirect('/admin/loaitin');
    }
}
