<?php 
include'conectdb.php';

echo $user_name = $_POST['user'];
echo $password =$_POST['password'];
echo $cpassword = $_POST['cpassword'];


$sql = "INSERT INTO cpassword(Username,password,cpassword,dt) VALUES ('{$user_name}','{$password}','{$cpassword}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfully.");


mysqli_close($conn);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
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
			  <div class="form-group ">
			    <label for="exampleInputPassword1">conform Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword2" name="cpassword">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>