
@if(session('user'))
<h4 style="color:green;">{{session('user')}}     has been added successull!</h4>
@endif
<h3>Login Form</h3>

<form  action="addMember" method="POST">
    {{-- Using put and delete methods  use method post and add the following code--}}
    {{-- {{method_field('DELETE')}} --}}
    @csrf
    <input type="text" name="user" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <button>Add Member</button>
</form>