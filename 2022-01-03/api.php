<?php 

include_once __DIR__.'/db.php';

// header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');
// header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');

$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// echo $data->name;
error_reporting(0);
if ($data->name=='') {
	echo json_encode(['status'=>'failed','msg'=>'Name is Required.']);
}else if ($data->email=='') {
	echo json_encode(['status'=>'failed','msg'=>'Email is Required.']);
}

else{
	$query ="INSERT INTO api_table(name,email)VALUES('$data->name','$data->email')";
	$run = mysqli_query($conn,$query);

	if ($run) {
		echo json_encode(['status'=>'success']);
	}else{
		echo json_encode(['status'=>'failed']);

	}
}



 ?>