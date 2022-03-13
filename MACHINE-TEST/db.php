<?php 
define("HOST","localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","st_records");

$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
	// echo "Database Connection Successfully.";
}else{
	echo "DB Connection Failed!!";
}

 ?>