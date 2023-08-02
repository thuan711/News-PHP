<form action="" method="POST">
    @csrf
    <input type="text" name="cateName" >
    @if($errors->any())
        Có lỗi nhen!
    @endif
    <button>Add</button>
</form>