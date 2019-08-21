
<!DOCTYPE html>
<html>
<head>
	<title>Details Student</title>
</head>
<body>

	<h2>Details Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>


	<table border="0">
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
		
</table>

</body>
</html>