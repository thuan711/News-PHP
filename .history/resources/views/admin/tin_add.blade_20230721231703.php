@extends('admin.layoutad')
@section('tieude')
    Thêm tin tức
@endsection
@section('noidungchinh')

    <div class="single-product pt-5 mb-150">
		<div class="container">
            <form class="mx-auto p-3" method="post" action="/admin/loaisp">
                <h1 class="text-primary p-2 h3" >THÊM TIN MỚI</h1>
                <div class="mb-3">
                    <label>ID</label> 
                    <input class="form-control" disabled placeholder=" ID Auto">
                </div>
                <div class="mb-3">
                    <label>Ngôn ngữ</label> 
                    <input value="{{old('lang')}}" class="form-control" name="lang" >
                </div>
                <div class="mb-3">
                    <label>Tiêu đề</label> 
                    <input value="{{old('tieuDe')}}" class="form-control" name="tieuDe" >
                </div>
                <div class="mb-3">
                    <label>Tóm tắt</label> 
                    <input value="{{old('tomTat')}}" class="form-control" name="tomTat" type="number">
                </div>
                <div class="mb-3">
                    <label>URL Hình</label> 
                    <input value="{{old('tomTat')}}" class="form-control" name="tomTat" type="number">
                </div>
                <div class="mb-3">
                    <label>Tóm tắt</label> 
                    <input value="{{old('tomTat')}}" class="form-control" name="tomTat" type="number">
                </div>
                <div class="mb-3">
                    <label>Tùy chọn</label> 
                    <div class="form-control" style="display:flex; ">
                        @if(old('hot')==1)
                        <input name="anhien" type="radio" value="0" style="width: 50px; height:20px; padding:5px;" checked> Ẩn 
                        <input name="anhien" type="radio" value="1" style="width: 50px; height:20px; padding:5px;"> Hiện
                        @else
                        <input name="anhien" type="radio" value="0" style="width: 50px;height:20px; padding:5px;"> Ẩn 
                        <input name="anhien" type="radio" value="1" checked style="width: 50px; height:20px; padding:5px;"> Hiện
                        @endif
                    </div>
                
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