{{-- <form action="{{route('dangki')}}" method="post">
    @csrf
    <input type="text" name="ho" placeholder="Họ" value="{{old('email')}}">
    <input type="text" name="ten" placeholder="Tên" value="{{old('email')}}">
    <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="comfirmpassword" placeholder="Comfirm Password">
    <button>Login</button>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $er)
                <li style="color:red">{{$er}}</li>
            @endforeach
        </ul>
    
    @endif
</form> --}}

@section('title') Đăng ký @endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<form method="post" action="{{route('dangki')}}" class = "m-auto col-6 border border-primary px-4 mt-5" > @csrf
    @if(Session::exists('thongbao'))
    <h5 class="alert alert-info text-center"> {{ Session::get('thongbao') }} </h5>
    @endif
    <div class="mb-3"> <h3 class="text-center"> Đăng Ký</h3> </div>
    <div class="mb-3">
    <label>Họ</label> <input type="text" name="ho" placeholder="Họ" value="{{old('ho')}}">
    </div>
    <div class="mb-3">
        <label>Tên</label><input type="text" name="ten" placeholder="Tên" value="{{old('ten')}}">
    </div>
    <div class="mb-3">
        <button type="submit" name="btn" class="btn btn-primary">Đăng nhập</button>
    </div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $er)
                <li style="color:red">{{$er}}</li>
            @endforeach
        </ul>
    
    @endif
</form>