@extends('admin.layoutad')
@section('tieude')
    Chỉnh sửa danh mục tin
@endsection
@section('noidungchinh')
	<div class="single-product pt-5 mb-150">
		<div class="container">
			<form class="mx-auto p-3" method="post" action="/admin/loaitin/{{$loaitin->id}}">
				<h1 class="text-primary p-2 h3" >CHỈNH LOẠI SẢN PHẨM</h1>
				<div class="mb-3">
					<label>Ngôn ngữ</label> 
					<input value="{{$loaitin->lang}}" class="form-control" name="lang" >
				</div>
                <div class="mb-3">
					<label>Tên loại</label> 
					<input value="{{$loaitin->ten}}" class="form-control" name="ten" >
				</div>
                <div class="mb-3">
					<label>Thứ tự</label> 
					<input value="{{$loaitin->thuTu}}" class="form-control" name="thuTu" >
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-warning py-2 px-5" >Lưu</button>
				</div>  @csrf {{ method_field('PUT') }}
			</form>
		</div>
	</div> 
@endsection
