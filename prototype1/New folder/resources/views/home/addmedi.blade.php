<!DOCTYPE html>
<html>
<head>
	<title>Add Medicine</title>
</head>
<body>

	<h2>Add Medicine</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
		<tr>
			<td>Vendor Name</td>
			<td><input type="text" name="vendor_name"></td>
		</tr>
		<tr>
			<td>price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>