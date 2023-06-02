 <h1>    View Users   {{-- {{count($viewUsers)}}--}}</h1> 
 {{-- if condition --}}
 @if($viewUser=='Janet')
 <h3>Hi{{$viewUser}}</h3>
 @elseif($viewUser=='Sam')
 <h3>Hello{{$viewUser}}</h3>
 @elseif
 <h3>Unnown user</h3>
 @endif