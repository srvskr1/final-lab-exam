<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Medicine List:</h2>
	
	<a href="{{route('customer.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Type</td>
			<td>Category</td>
			<td>vendor_name</td>
			
			<td>Available</td>
		</tr>
		
		<tr>
			<td>{{$std['id']}}</td>
			<td>{{$std['name']}}</td>
			<td>{{$std['type']}}</td>
			<td>{{$std['category']}}</td>
			<td>{{$std['vendor_name']}}</td>
			
			<td>{{$std['available']}}</td>
			<td>
				
				
				
			</td>
		</tr>
		</table>
		<form action="" method="post">
			{{csrf_field()}}
			<br><br>
		<label for="">Add more</label>
		<input type="number" name="number" value="1">
		<input type="submit" value="add"><br><br>
		</form>
		<h4>Total Amount: {{$cr}}</h4>
		<h4>Total Cost: {{$new}}</h4>
		



</body>
</html>