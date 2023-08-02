<form action="" method="POST">
    @csrf
    <input type="text" name="cateName" >
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
            @endforeach                                                                                                         
        </ul>
    @endif
    <button>Add</button>
</form>