@extends('admin.layoutad')
@section('noidungchinh')
<div class="single-product pt-5 mb-150">
		<div class="container">
        <button class="btn btn-primary m-2 p-2 float-right"><a style="color:white" href="/admin/sanpham/create">Thêm sản phẩm</a></button>
            <table class='table table-hover table-strip table-bordered'>
                <tr class="bg-secondary text-center">
                <th>ID</th> <th>Tiêu đề</th> <th>Tóm tắt / Ngày</th><th>Lượt xem / Hot</th>
                <th>Loại</th><th>Tags</th> <th class="text-end">Hành động</th>
                </tr>
                @foreach ($listtin as $row)
                <tr><td class="align-middle" width="120"> 
                    <img src="/img/{{$row->urlHinh}}" width="120" height="120"> 
                    </td>
                    <td class="align-middle" width="500"> 
                        <b class="text-primary">{{$row->tieuDe}}</b> <br>
                        <!-- {!!$row->mota!!} -->
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
                        <form action="/admin/sanpham/{{$row->id_sp}}" method="post">
                            <a href="/admin/sanpham/{{$row->id_sp}}/edit" class="btn btn-primary">Chỉnh</a>            
                            <button onclick="return confirm('Bạn muốn xóa sản phẩm?')" class="btn btn-danger" type="submit"> Xóa </button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Nội dung
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" style="width:2000px" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nội dung</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!!$row->noiDung!!}
                                </div>
                                
                                </div>
                            </div>
                            </div>
                            
                        </div>  
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