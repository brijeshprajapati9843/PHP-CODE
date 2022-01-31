<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
		<?php include 'nav.php'; ?>

		<div class="container my-5 ">
		<div class="col-md-6 m-auto">
		  <form method="post" action="#">
			  <div class="form-group ">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="user">
			  </div>
			  <div class="form-group ">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>

</body>
</html>