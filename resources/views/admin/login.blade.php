<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link href="{{asset('css/sey.css')}}" rel="stylesheet" />
</head>
<body>
	<div>
		<form action="" method="post"style="background-color:gold;width:400px;height:460px; margin:0 auto; border-radius:5px; padding:20px;">
		{{csrf_field()}}
			<h5>Welcome to Admin Panel</h5>
			<label>Username:</label><br>
			<input type="text" name="user" class="form-control" placeholder="Enter Username"><br>
			<label>Password:</label><br>
			<input type="text" name="pw" class="form-control" placeholder="Enter Password"><br>
			<button type="submit" class="btn btn-primary">login</button>
		</form>
	</div>

</body>
</html>