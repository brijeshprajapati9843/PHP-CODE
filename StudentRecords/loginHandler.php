<?php 
session_start();
include __DIR__.'/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
$run = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($run);
if (is_array($result)) {

	$_SESSION['validUser'] = $result;
	echo "<script>location.href = 'register.php'</script>";
}else{
	echo "<script>alert('Username or Password incorrect!!')</script>";
	echo "<script>location.href = 'login.php'</script>";
}







 ?>