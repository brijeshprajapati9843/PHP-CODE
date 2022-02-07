<?php 
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query Bilder/updatequery.php';

$name = post('name');
$email = post('email');
$mobile = post('mobile');

$query = new Query();
if ($query->insert('emp',[
'name'=>$name,
'email'=>$email,
'mobile'=>$mobile

])) {
	// echo "Record Inserted Successfully.";
	header("location:".url("show.php?status=Record Inserted"));
}else
{
	echo "Record Cannot Inserted..".mysqli_error($conn);
}

?>