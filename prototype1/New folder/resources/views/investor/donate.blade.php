<html>
	
	<head>
    <title>Fundrise.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
   
  <script src="{{ url('/') }}./js/jquery.min.js"></script>
   
   
   
  <link rel="stylesheet" href="{{ URL::asset('investor/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('investor/css/shop-homepage.css') }}">
   
   
   
  <script src="{{ URL::asset('investor/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('investor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
	  
  </head>

  <body>
  	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Investor Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.profile')}}">Profile</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.add_credit')}}">Add Credit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.withdraw')}}">Withdraw</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">log-out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h4>Total Credit:  {{$new['balance']}}</h4>

  <br><br><br>
  
 
   
      <h4>ID: {{$t['id']}}</h4> <br>
      <h4>Username: {{$t['username']}}</h4> <br>
      <h4>Title: {{$t['title']}}</h4> <br><br>
      <h4>Details: {{$t['details']}}</h4> <br><br>
      <h4>Projected Amount: {{$t['projected_amount']}}</h4> <br>
      <h4>Donated Amount: {{$t['donated_amount']}}</h4> <br>
      
    
      
    

  <form method="post">
    {{csrf_field()}}
    <label for="">Amount:</label><br>
    <input type="number" name="amount">
    <input type="submit" name="donate" value="Donate">
  </form>
  
  </body>

</html>