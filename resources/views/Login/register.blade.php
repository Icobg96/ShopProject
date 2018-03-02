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
 <h1 id="regTitle">Register</h1>
 <div class="containerTran">
 <form method="POST">
	<br>
	<span>Ussername :</span>
	<input 
		type="text" name="name" size="40"
		placeholder="Ussrname..."
		value="{{old('name')}}"
	/>
	<span>Phone :</span>
	<input 
		type="text" name="phone" size="40"
		placeholder="Phone..."
		value="{{old('email')}}"
	/>

	<span>Addres:</span>
	<input 
		type="text" name="addres" size="40"
		placeholder="Addres..."
		value="{{old('email')}}"
	/>

	<span>Email : </span>
	<input 
		type="text" name="email" size="40"
		placeholder="Email..."
		value="{{old('email')}}"
	/>

	<span>Password :</span>
	<input 
	type="password" name="password" size="40"
	placeholder="Enter password..." 
	/>

	<span>Password again :</span>
	<input 
	type="password" name="passwordConfirmed" size="40"
	placeholder="Enter password again..." 
	/>
	<input style="background: #8c0000;border-color:black;margin-left:260px;"
		type="submit" class="btn btn-info" 
		value="Sign up"
	/>
{{csrf_field()}}
</form>
<div id="background"></div>
</div>
@endsection