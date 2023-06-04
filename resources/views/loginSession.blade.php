<h1>Login</h1>
<form action="loginSession" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter username"><br><br>
    <input type="password" name="password" placeholder="Enter password"><br><br>
    <input type="submit" value="submit">

</form>