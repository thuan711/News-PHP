<form action="" method="POST">
    @csrf
    <input type="text" name="cateName" value="{{$category->name}}">
    <button>Update</button>
</form>