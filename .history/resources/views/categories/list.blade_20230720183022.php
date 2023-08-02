<h1>Danh mục</h1>
<ul>
    @foreach($categories as $cate)
        <li>{{$cate->name}}</li>
    @endforeach
</ul>