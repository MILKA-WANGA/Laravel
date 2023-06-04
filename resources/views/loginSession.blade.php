<h1>Login</h1>
<form action="loginSession" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password">

</form>