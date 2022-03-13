<?php 

define("HOST", "localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","app2022");

$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
	// echo "Connection Successfully.";

}else{
	echo "Connection Failed!!";
}






 ?>