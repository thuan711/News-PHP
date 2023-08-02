@extends('admin.layoutad')
@section('tieude')
    Thêm tin tức
@endsection
@section('noidungchinh')
<div class="single-product pt-5 mb-150" style="font-size:15px;">
		<div class="container">
        <p>Tìm thấy <b>{{ $count }}</b> tin</p>
        @if(Session::exists('thongbao'))
            <h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
        @endif
        <button class="btn btn-primary m-2 p-2 float-right"><a style="color:white" href="/admin/tin/create">Thêm tin mới</a></button>
            <table class='table table-hover table-strip table-bordered p-5'>
                <tr class="bg-secondary text-center">
                <th>ID</th> <th>Tiêu đề</th> <th>Tóm tắt </th><th>Chi tiết</th>
                <th>Loại</th> <th class="text-end">Hành động</th>
                </tr>
                @foreach ($listtin as $row)
                <tr><td class="align-middle" width="120"> 
                    <img src="/img/{{$row->urlHinh}}" width="120" height="120"> 
                    </td>
                    <td class="align-middle" width="350"> 
                        <b class="text-primary">{{$row->tieuDe}}</b> <br>
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                Nội dung
                            </button>
                        </p>
                        <div style="min-height: 120px;">
                            <div class="collapse width" id="collapseWidthExample">
                                <div class="card card-body" style="width: 320px;">
                                    {!!$row->noiDung!!}
                                </div>
                            </div>
                        </div>

                    </td>
                    <td class="align-middle text-center" width="400"> 
                        
                        <p>{{$row->tomTat}}</p> <br>            
                            {{ date('d/m/Y',strtotime($row->ngayDang))}} 
                    </td>
                    <td class="align-middle" width="150"> 
                        Lượt xem: <b>{{$row->xem}}</b> <br> 
                        Nổi bật: <b>{{($row->noiBat==1)? "Nóng":"Bình thường"}}</b> <br>
                        Ẩn hiện: <b>{{($row->anHien==1)? "Ẩn":"Hiện"}}</b><br>
                        Tags: <b>{{$row->tags}}</b>
                    </td>
                    <td class="align-middle text-center">
                    {{ app()->call('App\Http\Controllers\NewsController@ten', ['id' => $row->idLT]) }}
                    </td>
                    <td class="align-middle text-end" style="width:120px;">               
                        <form action="/admin/tin/{{$row->id}}" method="post">
                            <a href="/admin/tin/{{$row->id}}/edit" class="edit-link"><i class="fa-regular fa-pen-to-square"></i> <span class="tooltip">Sửa</span></a>            
                            <button onclick="return confirm('Bạn muốn xóa tin?')" type="submit" class="edit-link"> <i class="fa-solid fa-trash"></i> <span class="tooltip">Xóa</span></button> 
                            @csrf  @method('DELETE')
                        </form>
                    </td>
                </tr>
                
                @endforeach
                <tr> <td colspan="6"> 
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li>{{ $listtin->onEachSide(2)->links()}}</li> 
                                </ul>
                            </div>
                        </div>
                    </div> </td> </tr>
            </table>
        </div>
    </div>
@endsection