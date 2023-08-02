<form action="" method="POST">
    @csrf
    <input type="text" name="cateName" value="{{$categories->name}}">
    <button>Add</button>
</form>