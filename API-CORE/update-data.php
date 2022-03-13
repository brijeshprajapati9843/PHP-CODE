<?php 

header("Content-Type:application/json");

include __DIR__.'/db.php';

$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$sql = "UPDATE task_tbl set name = '$name', email = '$email', mobile = '$mobile' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
if ($result) {
	$response = array(
		"status"=>"200",
		"message"=>"Records Updated Successfully.."
		
	);

	}else{
		$response = array(
			"status"=>"201",
			"message"=>"Records Not Updated!!"
		);
	}
	echo json_encode($response,JSON_PRETTY_PRINT);


 ?>