
<h3>Login Form</h3>

<form  action="loginView" method="POST">
    {{-- Using put and delete methods  use method post and add the following code--}}
    {{-- {{method_field('DELETE')}} --}}
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
     <input type="submit" value="submit">
</form>