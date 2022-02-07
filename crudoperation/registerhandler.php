<?php 
include_once __DIR__."/functions.php";
include_once __DIR__.'/Query-Bilder/updatequery.php';

$name = post('name');
$email = post('email');
$phone = post('phone');
$class = post('class');
$rollno = post('rollno');

if (!empty($name) && !empty($email) && !empty($phone) && !empty($class) && !empty($rollno)) {
	$query = new Query();
	if ($query->insert('student',[
	'name'=>$name,
	'email'=>$email,
	'mobile'=>$phone,
	'class'=>$class,
	'roll_no'=>$rollno,
	])) {
		// echo "Successful.";
		header("location:".url("show.php?status = Record Inserted"));
	}else{
		echo "Failed".mysqli_error($conn);
	}
}else
{
	echo "<script> alert ('Cannot Inserted Blank Field in Database Record ...');</script>";
	// header("location:".url("index.php"));
}


 ?>