 <h1>    View Users   {{-- {{count($viewUsers)}}--}}</h1> 
 {{-- if condition --}}
 @if($viewUser=='Janet')
 <h3>Hi{{$viewUser}}</h3>
 @elseif($viewUser=='Sam')
 <h3>Hello{{$viewUser}}</h3>
 @else
 <h3>Unnown user</h3>
 @endif

 {{-- for Loop --}}
 @for($i=0; $i<10; $i++)
 <h3>{{$i}}</h3>
 @endfor
 {{-- foreach --}}
 @foreach ($viewUser as $item)
 <h3>{{$item}}</h3>
     
 @endforeach
 {{-- Authentication token --}}
 @csrf
 {{-- Json format --}}
 <script>
    $data=@json($viewUser);
    console.warn($data);
 </script>