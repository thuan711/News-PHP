<h1>Admin</h1>
@auth
    Xin chào {{auth()->user()->ten}}
    <form action="" method="post">
        @csrf
        <button>Đăng xuất</button>
    </form>
@else 
    <a href="{{route('dangnhap')}}">Đăng nhập</a>
@endauth
hello tấn duy
