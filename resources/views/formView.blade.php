<h1>Form Controller</h1>
{{-- Action is the path in route --}}
{{-- show error validatio --}}
{{$errors}}
<form action="formView" method="POST">
    @csrf
<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>

<input type="submit" value="Submit">
</form>