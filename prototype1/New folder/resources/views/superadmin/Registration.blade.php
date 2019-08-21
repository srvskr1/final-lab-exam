<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{ URL::asset('r/fonts/linearicons/style.css') }}">

		<link rel="stylesheet" href="{{ URL::asset('r/css/style.css') }}">


		<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
	   
	  <script src="{{ url('/') }}./js/jquery.min.js"></script>
	   
	   
	   
	  <link rel="stylesheet" href="{{ URL::asset('investor/css/bootstrap.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('investor/css/shop-homepage.css') }}">
	   
	   
	   
	  <script src="{{ URL::asset('investor/vendor/jquery/jquery.min.js') }}"></script>
	  <script src="{{ URL::asset('investor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 		
		
		<!-- STYLE CSS -->
		
	</head>

	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Super Admin Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('superadmin.index')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.profile')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.create')}}">Create Support Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.event')}}">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">log-out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method="post">
					{{csrf_field()}}
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="uname" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="name" placeholder="name">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" name="phone" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" name="email" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="Cpassword" placeholder="Confirm Password">
					</div>
					<input type="submit" name="registration" value="Registration">
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		

		<script src="{{ URL::asset('r/js/jquery-3.3.1.min.js') }}"></script>

		<script src="{{ URL::asset('r/js/main.js') }}"></script>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>