<?php 

$conn = mysqli_connect("localhost:3308","root","","app2022");

$id = $_POST['id'];

$query = "SELECT * FROM emp WHERE id='$id'";
$run = mysqli_query($conn,$query);

$rows = mysqli_fetch_assoc($run);

$response = array();
$response = $rows;

echo json_encode($response);
 ?>