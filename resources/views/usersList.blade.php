<h1>List of Members</h1>
<table border="1">
    <tr>
        <td>Number</td>
        <td>Name</td>
        <td>ID Number</td>
        <td>Role</td>
        <td>Date Of Birth</td>
       
    </tr>
    
   @foreach ($users as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['idNumber']}}</td>
            <td>{{$item['role']}}</td>
            <td>{{$item['dateOfBirth']}}</td>
           
        </tr>
   @endforeach
    

</table>
<span>
    {{$users->links()}}
</span>
{{-- //Remove Css style --}}
<style>
    .w-5{
        display: none;
    }
</style>