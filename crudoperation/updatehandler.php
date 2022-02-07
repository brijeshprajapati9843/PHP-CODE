<?php 
include_once __DIR__."/functions.php";
include_once __DIR__.'/Query-Bilder/updatequery.php';

$name = post('name');
$email = post('email');
$phone = post('phone');
$class = post('class');
$rollno = post('rollno');
$id = post('id');

$query = new Query();
if ($query->update('student',[
'name'=>$name,
'email'=>$email,
'mobile'=>$phone,
'class'=>$class,
'roll_no'=>$rollno,
])->where('id',$id)->commit()) {
	// echo "Successful.";
	header("location:".url("show.php?status = Record Updated"));
}else{
	echo "Failed".mysqli_error($conn);
}

 ?>