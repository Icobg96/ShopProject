<!DOCTYPE html>
<html  lang="en">
 

<head>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

 <link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-grid.css" rel="stylesheet">
<link href="css/bootstrap-reboot.css" rel="stylesheet">
<link href="css/bootstrap-reboot.min.css" rel="stylesheet">

<link href="css/bootstrap.css" rel="stylesheet">
 <script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body style="background-color: lightgray; " >

<nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse p-3 " style="opacity: 0.9;">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand " href="#">Navbar</a>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ">
    	@section('menu')
        
      @show
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto" style="padding-left: 20px;">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
     <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
              
            </ul>
            <button class="btn btn-outline-success btn-xs" type="submit"><img src="img/shop.png"></button>
            
  </div>
    </nav>

<div class="row mt-6 ml-5" >
 <div class="col-2 bg-faded "  style="min-width: 85px; min-height: 700px; opacity: 0.9;">

<nav class="nav navbar-light navbar-toggleable-sm bg-faded">
                <button class="navbar-toggler navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
  <ul class="nav flex-column bg-faded text-success"  >
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
          <a class="dropdown-item text-success" href="#">Action</a>
          <a class="dropdown-item text-success" href="#">Another action</a>
          <a class="dropdown-item text-success" href="#">Something else here</a>

        </div>
      </li>
</ul>
   </div>
</nav>
  </div>
  <div class="col-9 container" style="min-height: 700px;" >@yield('content')</div>
</div>


<footer class="bg-inverse align-items-center p-3">
  <div class="text-danger align-items-center" align="center"> Hristo Ispirov</div>

</footer>

    

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>