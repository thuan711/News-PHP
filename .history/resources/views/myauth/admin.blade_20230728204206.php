<h1>Admin</h1>
@auth
    Xin chào {{auth()->user()->email()}}
    <form action="{{route('dangxuat')}}" method="post">
        @csrf
        <button>Đăng xuất</button>
    </form>
@else 
 <a href="{{route('dangxuat')}}">Đăng nhập</a>
@endauth