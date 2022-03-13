<?php 

include_once __DIR__.'/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM blog WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
if ($result == 1) {
	$response = array(
		"status"=>"200",
		"message"=>"Records Deleted Successfully"
	);
}else{
	$response = array(
		"status"=>"201",
		"message"=>"Records Cannot Deleted!!"
	);

}
echo json_encode($response);




 ?>