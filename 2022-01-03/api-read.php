<?php 

include_once __DIR__.'/db.php';

// header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:GET');
// header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');

$data = json_decode(file_get_contents("php://input"));
// print_r($data);
// echo $data->name;
error_reporting(0);

$query ="SELECT * FROM api_table";

$id = $_GET['id'];

if (isset($id)) {
	$query ="SELECT * FROM api_table WHERE id = $id";
}
 
	
	$run = mysqli_query($conn,$query);

	$result = mysqli_fetch_all($run,MYSQLI_ASSOC);

	echo json_encode($result);




 ?>