<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Admin! {{session('user')}}</h1> 

	
	<a href="{{route('home.profile')}}">Profile</a> |
	<a href="{{route('home.add')}}">Create</a> |
	<a href="{{route('home.stdlist')}}">Customer List</a> |
	<a href="/logout">logout</a>


</body>
</html>