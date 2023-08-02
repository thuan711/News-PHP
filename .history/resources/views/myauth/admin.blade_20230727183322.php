<h1>Admin</h1>
@auth
    Xin chào {{auth()->user()->name()}}
    <form action="{{route('dangxuat')}}" method="post">
        @csrf
        <button>Đăng xuất</button>
    </form>
@else 
 <a href="{{route('dangnhap')}}">Đăng nhập</a>
@endauth