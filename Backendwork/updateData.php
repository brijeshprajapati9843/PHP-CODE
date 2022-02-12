<?php 
require_once __DIR__.'/query-builder/Query.php';


############# get update user ###############
if (isset($_POST['id']) && !isset($_POST[''])) {

	$user_id = $_POST['id'];
	$query = new Query();
	$res_data = $query->select("*")->table("stdata")->where('id',$user_id)->first();

	$response = array();
	$response = $res_data;

	echo json_encode($response);

} else{
	echo "Invalid Request";
}



 ?>