<h1>Update Profile</h1>
<form action="update" method="POST">
    {{ method_field('PUT') }}
    @csrf_field  
 <input type="hidden" name="id" value="{{$data['id']}}"><br><br>
 <input type="name" name="name" value="{{$data['name']}}"><br><br>
 <input type="number" name="idNumber" value="{{$data['idNumber']}}"><br><br>
 <input type="text" name="role" value="{{$data['role']}}"><br><br>
 <input type="text" name="dateOfBirthr" value="{{$data['dateOfBirth']}}"><br><br>
 <input type="submit" value="Update">

</form>