<form action="" method="POST">
    @csrf
    <input type="text" name="cateName" value="{{$category->name}}">
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
            @endforeach                                                                                                         
        </ul>
    @endif
    <button>Update</button>
</form>