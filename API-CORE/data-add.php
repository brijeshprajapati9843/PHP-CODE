<?php 

header("Content-Type:application/json");

include __DIR__.'/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO task_tbl(name,email,mobile)VALUES('$name','$email','$mobile')";
$result = mysqli_query($conn,$sql);
if ($result) {
	$response = array(
		"status"=>"200",
		"message"=>"Records Inserted Successfully.."
	);

	}else{
		$response = array(
			"status"=>"201",
			"message"=>"Records Not Inserted!!"
		);
	}
	echo json_encode($response,JSON_PRETTY_PRINT);


 ?>