@extends('admin.layoutad')
@section('tieude')
    Danh mục tin
@endsection
@section('noidungchinh')
<div class="single-product pt-5 mb-150" style="font-weight:600; font-size:15px;">
    <div class="container">
    @if(Session::exists('thongbao'))
        <h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
    @endif
        <button class="btn btn-primary m-2 p-2 float-right"><a style="color:white" href="/admin/loaitin/create">Thêm danh mục</a></button>
        <table class='table table-hover table-strip table-bordered m-2'>
            <tr class="bg-secondary">
            <th>ID</th> <th>Tên loại</th> <th>Thứ tự</th><th>Ngôn ngữ</th><th>Hiển thị</th><th class="text-end">Hành động</th>
            </tr>
            @foreach ($loaitin as $row)
            <tr><td class="align-middle"> {{$row->id}} </td>
                <td class="align-middle"> {{$row->ten}} </td>
                <td class="align-middle"> {{$row->thuTu}} </td>
                <td class="align-middle"> {{$row->lang}} </td>
                <td class="align-middle"> {{($row->anHien==1)? "Hiện":"Ẩn"}}</td>
                <td class="align-middle text-end">               
                    <form action="/admin/loaitin/{{$row->id}}" method="post">
                        <a href="/admin/loaitin/{{$row->id}}/edit" class="btn p-1 bg-warning">Chỉnh</a>            
                        <button onclick="return confirm('Bạn muốn xóa danh mục {{$row->ten}}?')" class="btn btn-danger p-1" type="submit">Xóa</button>
                        @csrf  @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
            <tr> 
                <td colspan="6"> 
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li>{{ $loaitin->onEachSide(2)->links()}}</li> 
                                </ul>
                            </div>
                        </div>
                    </div> 
                </td> 
            </tr>
        </table>
    </div>
</div>
@endsection