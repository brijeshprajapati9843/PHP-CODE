<?php 

define("HOST","localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","interview_task");

$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
	// echo "Successfully.";
}else{
	echo "DB Connection Failed!!";
}




 ?>