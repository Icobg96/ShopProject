@extends('layout.master')

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
 <h1 id="regTitle">Login</h1>
 <div class="containerTranLogin">
 		<img src="Img/Greenlogin.png" width="150px" height="150px" style="display:block;margin-left:auto;margin-right:auto;margin-top:60px;">
<form method="POST">
	<span>Email</span>
	<input 
		type="text" name="email" size="40"
		placeholder="Email..."
		value="{{old('email')}}"
	/>
	<span>Password</span>
	<input 
	type="password" name="password" size="40"
	placeholder="Enter password..." 
	/>
	<input style="background:#292b2c;border-color:black;margin-left:260px;"
		type="submit" class="btn btn-info" 
		value="Submit"
	/>
{{csrf_field()}}
</form>
<div id="background"></div>
</div>
</div>
@endsection