<ul>
    @foreach($categories as $cate)
        <li>{{$cate->name}}</li>
    @endforeach
</ul>