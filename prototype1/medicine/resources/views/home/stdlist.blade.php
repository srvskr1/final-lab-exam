<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>User Name</td>
			<td>email</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['Name']}}</td>
			<td>{{$value['username']}}</td>
			<td>{{$value['email']}}</td>
			<td>
				
				<a href="{{route('home.delete', $value['id'])}}">Delete</a>
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>