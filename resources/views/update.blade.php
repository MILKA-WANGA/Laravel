<h1>Update Profile</h1>


<form action="/update" method="POST">
  
    @csrf
 <input type="hidden" name="id" value="{{$data['id']}}"><br><br>
 <input type="name" name="name" value="{{$data['name']}}"><br><br>
 <input type="number" name="idNumber" value="{{$data['idNumber']}}"><br><br>
 <input type="text" name="role" value="{{$data['role']}}"><br><br>
 <input type="text" name="dateOfBirth" value="{{$data['dateOfBirth']}}"><br><br>
<button type="submit">Submit</button>

</form>