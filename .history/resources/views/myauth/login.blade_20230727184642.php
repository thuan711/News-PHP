<form action="" method="post">
    @csrf
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button>Login</button>
    if($errors->any()){
        <ul>
            foreach
        </ul>
    }
</form>