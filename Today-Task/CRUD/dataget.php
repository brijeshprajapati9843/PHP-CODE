<?php 

include_once __DIR__.'/db.php';

// $id = $_GET['id'];

$sql = "SELECT * FROM blog";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	 $data[] = $row;
}
if ($data) {
	$response = array(
		"status"=>"200",
		"message"=>"Records Found",
		"data"=>$data
	);

}else{
	$response = array(
		"status"=>"201",
		"message"=>"Records Not Found",
		"data"=>[]
	);
}
echo json_encode($response,JSON_PRETTY_PRINT);



// if ($result == 1) {
// 	// echo "Inserted Successfully.";
// 	$response = array("status"=>"1","message"=>"Data Inserted Successfully");
// }else{
// 	// echo "Data Cannot Inserted!!";
// 	$response = array("status"=>"0","message"=>"Data Cannot Inserted!!");

// }
// echo json_encode($response);

 ?>