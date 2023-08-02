@extends('admin.layoutad')
@section('tieude')
    Thêm tin tức
@endsection
@section('noidungchinh')
<div class="single-product pt-5 mb-150">
		<div class="container">
        <button class="btn btn-primary m-2 p-2 float-right"><a style="color:white" href="/admin/tin/create">Thêm tin mới</a></button>
            <table class='table table-hover table-strip table-bordered'>
                <tr class="bg-secondary text-center">
                <th>ID</th> <th>Tiêu đề</th> <th>Tóm tắt / Ngày</th><th>Lượt xem / Hot</th>
                <th>Loại</th><th>Tags</th> <th class="text-end">Hành động</th>
                </tr>
                @foreach ($listtin as $row)
                <tr><td class="align-middle" width="120"> 
                    <img src="/img/{{$row->urlHinh}}" width="120" height="120"> 
                    </td>
                    <td class="align-middle" width="400"> 
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
                    <td class="align-middle text-center"> 
                        
                        <p>{{$row->tomTat}}</p> <br>            
                            {{ date('d/m/Y',strtotime($row->ngayDang))}} 
                    </td>
                    <td class="align-middle text-center"> 
                        Xem: {{$row->xem}} <br> 
                        Hot: {{($row->noiBat==1)? "Nổi bật":"Bình thường"}}
                    </td>
                    <td class="align-middle text-center">
                    {{ app()->call('App\Http\Controllers\NewsController@ten', ['id' => $row->idLT]) }}
                    </td>
                    <td>{{$row->tags}}</td>
                    <td class="align-middle text-end">               
                        <form action="/admin/tin/{{$row->id}}" method="post">
                            <a href="/admin/tin/{{$row->id}}/edit" class="btn btn-primary">Chỉnh</a>            
                            <button onclick="return confirm('Bạn muốn xóa tin?')" class="btn btn-danger" type="submit"> Xóa </button> 
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