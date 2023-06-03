<h1>Form Controller</h1>
{{-- Action is the path in route --}}
{{-- show error validatio --}}
{{-- {{$errors}} --}}
@if($errors->any())
@foreach ($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif
<form action="formView" method="POST">
    @csrf
<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>

<input type="submit" value="Submit">
</form>