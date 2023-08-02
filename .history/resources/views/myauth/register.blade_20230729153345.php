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
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Họ</label>
            <input type="text" name="ho" class="form-control" value="{{old('ho')}}">
        </div>
        <div class="col-md-6 mb-3">
            <label>Tên</label>
            <input type="text" name="ten" class="form-control" value="{{old('ten')}}">
        </div>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{old('email')}}">
    </div>
    <div class="col-md-6 mb-3">
        <label>Mật khẩu</label>
        <input type="text" name="password" class="form-control" value="{{old('password')}}">
    </div>
    <div class="col-md-6 mb-3">
        <label>Nhập lại mật khẩu</label>
        <input type="text" name="comfirmpassword" class="form-control" value="{{old('comfirmpassword')}}">
    </div>
    <div class="mb-3">
        <button type="submit" name="btn" class="btn btn-primary">Đăng ký</button>
    </div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $er)
                <li style="color:red">{{$er}}</li>
            @endforeach
        </ul>
    
    @endif
</form>