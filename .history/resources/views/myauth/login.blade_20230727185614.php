<form action="{{route('dangnhap')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="Email" value="{{old('name')}}">
    <input type="password" name="password" placeholder="Password">
    <button>Login</button>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $er)
                <li style="color:red">{{$er}}</li>
            @endforeach
        </ul>
    
    @endif
</form>