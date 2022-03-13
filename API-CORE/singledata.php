<?php 

header("Content-Type:application/json");

include __DIR__.'/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM task_tbl WHERE id = $id";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {

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
}

 ?>