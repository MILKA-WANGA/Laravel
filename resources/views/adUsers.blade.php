<h1>Add Members</h1>
<form action="adUsers" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
       <input type="submit" value="submit">
</form>