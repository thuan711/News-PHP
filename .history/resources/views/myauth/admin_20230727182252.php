<h1>Admin</h1>
@auth
    Xin chào {{auth()->user()->ten()}}
@else 
 <a href="{{route('dangnhap'}}">Đăng nhập</a>
@endauth