<?php
include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

if (isset($_POST["submit"])) {
	$name = post('name');
	$email = post('email');
	$phone = post('phone');
	$password = post('password');
	$cpassword = post('cpassword');

	if ($password == $cpassword) {

		$query = new Query();
		if ($query->insert('st_detail',[

			'name'=>$name,
			'email'=>$email,
			'phone'=>$phone,
			'password'=>$password,
			'cpassword'=>$cpassword
			
		])) {
			echo "<script>alert('Register Successfully...')</script>";
			 
		}else{

			echo "<script>alert('Record Cannot Inserted...')</script>";
		}
	}
	else{
		echo "<script>alert('Password Mismatch...')</script>";
	}


}

 

 ?>