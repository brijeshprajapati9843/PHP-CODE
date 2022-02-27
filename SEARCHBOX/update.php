<?php 
require_once __DIR__.'/query-builder/Query.php';


if (isset($_POST['submit'])) {
	// $email = $_POST['email'];
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	// echo $oldpass;
	// echo $newpass                         
	$query = new Query;
	$res = $query->select("pass")->table("info")->first();
	// print_r($res->pass);
	if($res->pass == $oldpass){


	$query = new Query();
	if ($query->update('info',[

		'pass'=>$newpass

	])->where('pass',$oldpass)) {
		echo "updated..";
	}else{
		echo "Failed!!";
	}
}
else{
	echo "mismatch !!";
}
}

 ?>