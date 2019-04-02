<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">	
	<link href="{{asset('css/sey.css')}}" rel="stylesheet" />
</head>
<body>

		<div>
		<form action="" method="post"style="background-color:gold;width:400px;height:780px; margin:0 auto; border-radius:5px; padding:20px;">
		{{csrf_field()}}
			<h2>Adding Product</h2>
			<label>Product ID:</label><br>
			<input type="text" name="pid" class="form-control" placeholder="Enter ID"><br>
			<label>Prodct Name:</label><br>
			<input type="text" name="pname" class="form-control" placeholder="Enter Product Name"><br>
			<label>Supplier Name:</label><br>
			<input type="text" name="sname" class="form-control" placeholder="Enter Supplier Name"><br>
			<label>Category:</label><br>
			<input type="text" name="cate" class="form-control" placeholder="Enter Category"><br>
			<label>Unit Price:</label><br>
			<input type="text" name="uprice" class="form-control" placeholder="Enter Unit Price"><br>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
	</form>
</body>
</html>