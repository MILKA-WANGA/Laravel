
<h3>Login Form</h3>

<form  action="loginView" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
     <input type="submit" value="submit">
</form>