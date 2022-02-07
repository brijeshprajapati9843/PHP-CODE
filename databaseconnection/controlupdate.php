<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query Bilder/updatequery.php';

$name = post('name');
$email = post('email');
$mobile = post('mobile');
$id = post('id');

$query = new Query();
if ($query->update('emp',[
'name'=>$name,
'email'=>$email,
'mobile'=>$mobile
])->where('id',$id)->commit()) {
	// echo "Record Inserted Successfully.";
	header("location:".url("show.php?status=Record Updated"));
}else
{
	echo "Record Cannot Update..".mysqli_error($conn);
}



 ?>