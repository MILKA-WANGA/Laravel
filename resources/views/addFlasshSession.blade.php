<h1>FLash Session</h1>
<form action="formView" method="POST">
    @csrf
<input type="text" name="username" placeholder="username">
@error('username')<span style="color:red">{{$message}}</span>@enderror<br><br>
<input type="password" name="password" placeholder="password">
@error('password')<span style="color:red">{{$message}}</span>@enderror<br><br>

<input type="submit" value="Submit">
</form>