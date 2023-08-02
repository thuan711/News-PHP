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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
