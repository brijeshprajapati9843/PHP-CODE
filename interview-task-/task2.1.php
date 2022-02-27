<?php 

require_once __DIR__.'/conn.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

$sql = "SELECT * from tbl_name where SERVICE_ID={$serviceid}";

$res = mysqli_query($conn,$sql);


$record = mysqli_fetch_assoc($res);


print_r($record);


}


?>