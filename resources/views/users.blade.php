{{-- import header component and assign some data --}}
<x-header data="Contact Component Header"/>
<h1>Users Page</h1>
{{-- Include the content of inner.blade.php in users.blade.php --}}
@include('inner')