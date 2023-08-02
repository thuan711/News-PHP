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
    public function create(RuleNhapLoaiTin $request)
    {
        $arr = $request->post();
        $ten_loai = ($request->has('ten_loai')) ? $arr['ten_loai'] : "";
        $thutu = ($request->has('thutu')) ? $arr['thutu'] : "";
        $ten_loai = trim(strip_tags($ten_loai));
        $thutu = (int) $thutu;
        $loai = new \App\Models\LoaiTin;
        $loai->ten_loai = $ten_loai;
        $loai->thutu = $thutu;
        
        $loai->save();
        return redirect('admin.loaitin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view("admin.loait_add");
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
