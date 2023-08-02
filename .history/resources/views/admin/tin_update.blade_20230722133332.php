@extends('admin.layoutad')
@section('tieude')
    Chỉnh sửa tin
@endsection
@section('noidungchinh')
	<div class="single-product pt-5 mb-150">
		<div class="container">
			<form class="mx-auto p-3" method="post" action="/admin/tin/{{$tin->id}}">
				<h1 class="text-primary p-2 h3" >CHỈNH SỬA SẢN PHẨM</h1>
				<div class="mb-3">
					<label>Ngôn ngữ</label> 
					<input value="{{$tin->lang}}" class="form-control" name="lang" >
				</div>
                <div class="mb-3">
					<label>Tên loại</label> 
					<input value="{{$tin->tieuDe}}" class="form-control" name="ten" >
				</div>
                <div class="mb-3">
					<label>Thứ tự</label> 
					<input value="{{$tin->tomTat}}" class="form-control" name="thuTu" >
				</div>
                <div class="mb-3">
                    <label>Tùy chọn</label> 
                    <div class="form-control" style="display:flex; ">
                        
						<input style="width: 50px; height:20px; padding:5px;" name="anhien" type="radio" value="0" {{ $tin->anhien==0? "checked":"" }} > Ẩn
						<input style="width: 50px; height:20px; padding:5px;" name="anhien" type="radio" value="1" {{ $tin->anhien==1? "checked":"" }} > Hiện
                    </div>
                
                </div>
				<div class="mb-3">
					<button type="submit" class="btn btn-warning py-2 px-5" >Lưu</button>
				</div>  @csrf {{ method_field('PUT') }}
			</form>
		</div>
	</div> 
@endsection
