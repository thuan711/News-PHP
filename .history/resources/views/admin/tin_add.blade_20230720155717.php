@extends('layoutad')
@section('admin.tieude')
    Thêm tin tức
@endsection
@section('noidungchinh')

    <div class="single-product pt-5 mb-150">
		<div class="container">
            <form class="mx-auto p-3" method="post" action="/admin/loaisp">
                <h1 class="text-primary p-2 h3" >THÊM LOẠI SẢN PHẨM</h1>
                <div class="mb-3">
                    <label>ID</label> 
                    <input class="form-control" disabled placeholder=" ID Auto">
                </div>
                <div class="mb-3">
                    <label>Tên loại</label> 
                    <input value="{{old('ten_loai')}}" class="form-control" name="ten_loai" >
                </div>
                <div class="mb-3">
                    <label>Số thứ tự</label> 
                    <input value="{{old('thutu')}}" class="form-control" name="thutu" type="number">
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-warning py-2 px-5" >Lưu</button>
                </div>  @csrf 
                @if ($errors->any())
                    <div class="alert alert-info p-2">
                    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach  </ul>
                    </div>
                @endif
            </form> 
        </div>
    </div>
@endsection