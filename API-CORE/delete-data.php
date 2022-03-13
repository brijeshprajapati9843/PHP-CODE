<?php 

header("Content-Type:application/json");

include __DIR__.'/db.php';

$id = $_POST['id'];

$sql = "DELETE FROM task_tbl WHERE id = $id";
$result = mysqli_query($conn,$sql);
if($result) {

$response = array(
	"status"=>"200",
	"message"=>"Records Deleted.",
);

}else{
	$response = array(
		"status"=>"201",
		"message"=>"Records Not Deleted!!",
	);
}
echo json_encode($response,JSON_PRETTY_PRINT);


 ?>