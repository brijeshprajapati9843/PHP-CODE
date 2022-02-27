<?php 

// echo "ok";
$conn = mysqli_connect("localhost:3308","root","","app2022");

// extract($_POST);
$id = $_POST['id'];

$query = "DELETE FROM emp WHERE id='$id'";
$run = mysqli_query($conn, $query);
if ($run) {
	echo "Record Deleted Successfully.";
}else
{
	echo "Record Cannot Deleted!!";
}



 ?>