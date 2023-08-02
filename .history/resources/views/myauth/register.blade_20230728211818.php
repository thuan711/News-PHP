<form action="{{route('dangki')}}" method="post">
    @csrf
    <input type="text" name="ten" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
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
</form>