<?php 

include_once __DIR__.'/db.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');

$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// echo $data->name;
error_reporting(0);

$id = $_GET['id'];

if ($id == '') {
	echo json_encode(['msg'=>'id is Required than please Provide id']);
}else{

	$sel_query = "SELECT * FROM api_table WHERE id = $id";

	$run1 = mysqli_query($conn,$sel_query);
	$result1 = mysqli_fetch_assoc($run1);
	$name = $result1['name'];
	$email = $result1['email'];


	if ($data->name != '') {
		$name = $data->name;
	}
	if ($data->email != '') {
		$email = $data->email;
	}

	// echo $name."<br/>";
	// echo $email;

	$query = "UPDATE api_table SET name='$name' , email='$email' WHERE id='$id'";
	$run = mysqli_query($conn,$query);

	if ($run) {
		echo json_encode(['status'=>'success']);
	}else{
		echo json_encode(['status'=>'failed']);
	}

}



 ?>