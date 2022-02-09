<?php 

require_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

$email = post('email');
$password = post('password');


$query = new Query();
$records = $query->select("*")->table('st_detail')->where(['email'=>$email , 'password'=>$password])->first();

// print_r($records);

if (!($email == '' && $password == '')) {
	if ($email == $records->email && $password == $records->password) {
	// echo "<script>alert('Login Successfully...')</script>";
	header("location:".url("home.php"));
	session_start();
	$_SESSION['email'] = $email;

	}else{

	header("location:".url("login.php?status=Username or Password incorrect"));


	}
}else{

	header("location:".url("login.php"));

}


 ?>