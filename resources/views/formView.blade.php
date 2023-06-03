<h1>Form Controller</h1>
{{-- Action is the path in route --}}
<form action="formView" method="POST">
    @csrf
<input type="text" name="username" placeholder="username"><br><br>
<input type="submit" value="Submit">
</form>