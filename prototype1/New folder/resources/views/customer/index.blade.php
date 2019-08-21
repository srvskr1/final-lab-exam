<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Cutomer! {{session('user')}}</h1> 

	
	<a href="{{route('customer.profile')}}">Profile</a> |
	<a href="{{route('customer.medilist')}}">Medicine List</a> |
	
	<a href="/logout">logout</a>


</body>
</html>