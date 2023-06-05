<h1>Update Profile</h1>
<form action="update" method="POST">
    @csrf
 <input type="hidden" name="id" value="{{$data['id']}}">
 <input type="name" name="name" value="{{$data['name']}}">
 <input type="number" name="idNumber" value="{{$data['idNumber']}}">
 <input type="text" name="role" value="{{$data['role']}}">
 <input type="text" name="dateOfBirthr" value="{{$data['dateOfBirth']}}">
 <input type="submit" value="Update">

</form>