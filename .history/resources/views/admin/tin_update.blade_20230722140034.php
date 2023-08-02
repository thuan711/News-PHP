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
					<label>Tiêu đề</label> 
					<input value="{{$tin->tieuDe}}" class="form-control" name="ten" >
				</div>
                <div class="mb-3">
					<label>Tóm tắt</label> 
					<input value="{{$tin->tomTat}}" class="form-control" name="tomTat" >
				</div>
                <div class="mb-3">
					<label>Hình ảnh</label> 
					<input value="{{$tin->urlHinh}}" class="form-control" name="urlHinh" >
				</div>
                <div class="mb-3">
					<label>Ngày đăng</label> 
					<input value="{{$tin->ngayDang}}" class="form-control" name="ngayDang" type="date">
				</div>
                <div class="mb-3">
					<label>Tags tin tức</label> 
					<input value="{{$tin->tags}}" class="form-control" name="tags">
				</div>
                <div class="col-md-6">
                    <label>Danh mục tin</label> 
                    <select class="form-control" name="id_loai">
                        <?php $loaisp = \App\Models\LoaiTin::all();?>
                        @foreach ($tin as $loai )
                        @if($tin->idLT ==$loai->id_tin)
                        <option value="{{$loai->id}}" selected> {{$loai->ten}}</option>
                        @else
                        <option value="{{$loai->id}}"> {{$loai->ten}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Nổi bật</label> 
                    <div class="form-control" style="display:flex; ">
						<input style="width: 50px; height:20px; padding:5px;" name="noiBat" type="radio" value="0" {{ $tin->noiBat==1? "checked":"" }} > Nổi bật
						<input style="width: 50px; height:20px; padding:5px;" name="noiBat" type="radio" value="1" {{ $tin->noiBat==0? "checked":"" }} > Bình thường
                    </div>
                </div>
                <div class="mb-3">
                    <label>Ẩn hiện</label> 
                    <div class="form-control" style="display:flex; ">
						<input style="width: 50px; height:20px; padding:5px;" name="anhien" type="radio" value="0" {{ $tin->anhien==0? "checked":"" }} > Hiện
						<input style="width: 50px; height:20px; padding:5px;" name="anhien" type="radio" value="1" {{ $tin->anhien==1? "checked":"" }} > Ẩn
                    </div>
                </div>
                <div class="mb-3">
                    <label>Nội dung</label>
                    <textarea id="mota" name="noiDung" rows="5" class="form-control mb-3">{{$tin->noiDung}}</textarea>
                </div>
				<div class="mb-3">
					<button type="submit" class="btn btn-warning py-2 px-5" >Lưu</button>
				</div>  @csrf {{ method_field('PUT') }}
			</form>
		</div>
	</div> 
    <script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'mota' );
    </script>
@endsection
