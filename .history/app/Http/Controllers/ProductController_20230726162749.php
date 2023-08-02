<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Product;
use App\Http\Resources\Product as ProductResoure;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $arr = [
            'status' => true,
            'message' => "Danh sách sản phẩm",
            'data' => ProductResoure::collection($products)
        ];
        return response()->json($arr,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,['tenSP'=>'required','gia'=>'required']);
        if($validator->fails()){
            $arr = ['success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()        
            ];
        }
        $products = Product::create($input);
        $arr = ['status' => true,
            'message' => "Sản phẩm được thêm thành công",
            'data' => new ProductResoure($products)
        ];
        return response()->json($arr,201);
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
