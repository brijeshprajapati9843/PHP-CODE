<?php 

include_once __DIR__.'/db.php';

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO blog(title,description)VALUES('$title','$description')";
$result = mysqli_query($conn,$sql);
if ($result == 1) {
	// echo "Inserted Successfully.";
	$response = array("status"=>"1","message"=>"Data Inserted Successfully");
}else{
	// echo "Data Cannot Inserted!!";
	$response = array("status"=>"0","message"=>"Data Cannot Inserted!!");

}
echo json_encode($response);

 ?>