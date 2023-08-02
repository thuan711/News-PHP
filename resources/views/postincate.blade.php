<h1>bài viết danh mục có</h1>
<ul>
    
        @foreach($posts as $post)
        <li>{{$post->title}}</li>
        @endforeach
    
</ul>