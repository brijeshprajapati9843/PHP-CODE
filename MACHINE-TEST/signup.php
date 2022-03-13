<?php 

include_once __DIR__.'/db.php';

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO user(name,email,mobile,password)VALUES('$name','$email','$mobile','$password')";
if (mysqli_query($conn,$sql)) {
	header("location:login.php");
}else{
	echo "Registeration Failed!!";
}
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Sign Up Here </h2>
	<hr>
	<form action="" method="post">
		Name :<input type="text" name="name"><br><br>
		Email :<input type="email" name="email"><br><br>
		Mobile :<input type="mobile" name="mobile"><br><br>
		Password :<input type="password" name="password"><br><br>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>