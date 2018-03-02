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

 <h1 id="regTitle">Ad</h1>

 <div class="leftImg">
 	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/background5.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/background.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/background1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
 
 <div class="right">
 	<h2> Title :</h2>
 	<hr>
 	<h3>Price :</h3>
 	<br>
 	<h3>Description :</h3>
 </div>

{{csrf_field()}}

@endsection