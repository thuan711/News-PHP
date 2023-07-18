@extends('admin.layoutad')
@section('noidungchinh')
<div class="single-product pt-5 mb-150">
    <div class="container">
        <button class="btn btn-primary m-2 p-2 float-right"><a style="color:white" href="/admin/loaisp/create">Thêm danh mục</a></button>
        <table class='table table-hover table-strip table-bordered'>
            <tr class="bg-secondary">
            <th>ID</th> <th>Tên loại</th> <th>Thứ tự</th><th class="text-end">Hành động</th>
            </tr>
            @foreach ($loaitin as $row)
            <tr><td class="align-middle"> {{$row->id}} </td>
                <td class="align-middle"> {{$row->ten}} </td>
                <td class="align-middle"> {{$row->thiTu}} </td>
                <td class="align-middle text-end">               
                    <form action="/admin/loaisp/{{$row->id_loai}}" method="post">
                        <a href="/admin/loaisp/{{$row->id_loai}}/edit" class="btn p-2">Chỉnh</a>            
                        <button onclick="return confirm('Bạn muốn xóa danh mục?')" class="btn btn-danger" type="submit">Xóa</button>
                        @csrf  @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
            <tr> <td colspan="4"> 
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul>
                                <li>{{ $loaitin->onEachSide(2)->links()}}</li> 
                            </ul>
                        </div>
                    </div>
                </div> </td> </tr>
        </table>
    </div>
</div>
@endsection