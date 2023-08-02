<h1>Danh mục</h1>
<a href="{{/categories/add}}">Thêm</a>
<ul>
    @foreach($categories as $cate)
        <li>{{$cate->name}}</li>
    @endforeach
</ul>