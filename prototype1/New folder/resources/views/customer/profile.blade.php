<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Profile</h1> 

	
	<form method="post" enctype="multipart/form-data">
		<table>
			
		
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std['Name']}}</td>
		</tr>
		<tr>
			<td>Email :</td>
			<td>{{$std['email']}}</td>
		</tr>

		<tr>
			<a href="{{route('home.edit', $std['id'])}}">Edit</a>
		</tr>
		</table>
	</form>




</body>
</html>