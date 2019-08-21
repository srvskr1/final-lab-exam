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
			<td>Price</td>
			<td>Available</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['type']}}</td>
			<td>{{$value['category']}}</td>
			<td>{{$value['vendor_name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['available']}}</td>
			<td>
				
				
				<a href="{{route('customer.cart',$value['id'])}}">add</a> |
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>