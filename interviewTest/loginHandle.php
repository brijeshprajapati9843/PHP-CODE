<?php 

include __DIR__.'/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// echo "$email";
$query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
$run = mysqli_query($conn ,$query);
	
$result = mysqli_fetch_assoc($run);
// print_r($result);
if (is_array($result))
{
	session_start();
	$_SESSION['user'] = $result;

	header("location:dashboard.php");
}else{
	// header("location:login.php");
	echo "<script>alert('Username or Password incorrect!!')</script>";
}
 ?>