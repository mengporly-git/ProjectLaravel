<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">	
    <link href="{{asset('css/sey.css')}}" rel="stylesheet" />
</head>
<body>

		<div>
        <form action="" method="post"style="background-color:gold;width:400px;height:670px; margin:0 auto; border-radius:5px; padding:20px;">
		{{csrf_field()}}
			<h5>Adding Customers</h5>
			<label>Customer ID:</label><br>
			<input type="text" name="cid" class="form-control" placeholder="Enter ID"><br>
			<label>Customer Name:</label><br>
			<input type="text" name="cname" class="form-control" placeholder="Enter Customer Name"><br>
			<label>Customer Phone:</label><br>
			<input type="text" name="cphone" class="form-control" placeholder="Enter Phone Number"><br>
			<label>Customer Email:</label><br>
			<input type="text" name="cemail" class="form-control" placeholder="Enter Email"><br>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
	</form>
</body>
</html>