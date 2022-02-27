<?php 


require_once __DIR__.'/conn.php';


//using aggregate function
$sql = "SELECT SC_AMOUNT, SUM(SC_AMOUNT) ";


$res = mysqli_query($conn,$sql);

$record = mysqli_fetch_assoc($res);


print_r ($record);













?>