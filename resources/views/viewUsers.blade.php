 <h1>    View Users   {{-- {{count($viewUsers)}}--}}</h1> 
 {{-- if condition --}}
 @if($viewUsers=='Janet')
 <h3>Hi{{$viewUsers}}</h3>
 {{-- @elseif($viewUser=='Janet')
 <h3>Hi{{$viewUser}}</h3> --}}
 @endif