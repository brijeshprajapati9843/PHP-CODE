<?php 
require_once __DIR__.'/query-builder/Query.php';

$email = $_POST['email'];
$password = $_POST['password'];
 
$query = new Query();
$user = $query->select('*')->table('user')->where([
 'email'=>$email,
 'password'=>$password,
 ])->first();

if ($user) {
	 session_start();

	 $_SESSION['validUser'] = $user;

	 if ($user->user_type == '1') {
	 	header("location:admin/");
	 }else if ($user->user_type == "2") {
	 	header("location:user/");
	 }
}else{
	echo "<script>window.alert('Invalid Username or Password!!')</script>";
	echo "<script>location.href='index.php'</script>";
}

 ?>