@extends('layout.master')
@section('menu')
 @parent

@endsection
@section('CategorisMenu')
 <li class="nav-item">
  <a class="nav-link active text-success" href="#">Active</a>
 </li>
 <li class="nav-item">
  <a class="nav-link text-success" href="#">Link</a>
 </li>
 <li class="nav-item">
  <a class="nav-link text-success" href="#">Link</a>
 </li>
 <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-success" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Dropdown link
  </a>
  <div class="dropdown-menu bg-faded" aria-labelledby="navbarDropdownMenuLink">
   <a class="dropdown-item text-success" href="#">Action1</a>
   <a class="dropdown-item text-success" href="#">Another action</a>
   <a class="dropdown-item text-success" href="#">Something else here</a>

  </div>
 </li>
 @endsection
@section('content')

	
<h1 class="h1">Hello in my first php site</h1>


@endsection