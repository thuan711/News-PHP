<h1>Danh mục</h1>
<a href="/addcate">Thêm</a>
<ul>
    @foreach($categories as $cate)
        <li>{{$cate->name}}
            <a href="{{route('delcate',['id'=>$cate->id])}}">Xóa</a>
            <a href="{{route('editcate',['id'=>$cate->id])}}">Chỉnh</a>
        </li>
    @endforeach
</ul>
{{$categories->links(2)}}