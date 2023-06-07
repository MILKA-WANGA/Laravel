<h1>Query Builder</h1>
<table>
    <tr>
        <td>Number</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Date Update</td>
        <td>Date Created</td>
    </tr>
    
        @foreach ($data as $item)
        <tr>
            <td>{{$item[id]}}</td>
            <td>{{$item[name]}}</td>
            <td>{{$item[email]}}</td>
            <td>{{$item[Password]}}</td>
            <td>{{$item{updated_at}}}</td>
            <td>{{$item[created_at]}}</td>
        </tr>
            
        @endforeach
    
</table>