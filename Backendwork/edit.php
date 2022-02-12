<?php 
require_once __DIR__.'/query-builder/Query.php';

// update records

if (isset($_POST['hidden_user_id'])) {
	$hidden_user_id = $_POST['hidden_user_id'];
	$name = $_POST['st_name'];
	$email = $_POST['st_email'];
	$phone = $_POST['st_phone'];

	$query = new Query();
	if($query->update("stdata",[

		'name'=>$name,
		'email'=>$email,
		'phone'=>$phone
	])->where('id',$hidden_user_id)->commit())
	{
		echo "updated Successfully.";
	}else{

		echo "Record Cannot Updated!!";

	}

}


 ?>