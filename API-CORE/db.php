<?php 

define("HOST", "localhost:3308");
define("USERNAME", "root");
define("PASSWORD","");
define("DBNAME","app2022");

$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME) or die("Connection Failed");
 ?>