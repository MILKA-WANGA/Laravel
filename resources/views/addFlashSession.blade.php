<h3>Login Form</h3>

<form  action="addFlashSession" method="POST">
    {{-- Using put and delete methods  use method post and add the following code--}}
    {{-- {{method_field('DELETE')}} --}}
    @csrf
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
     <button type="submit">submit</button>
</form>