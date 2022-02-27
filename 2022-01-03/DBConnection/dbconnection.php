<?php 

include_once __DIR__.'/setting.php';
// Database connection

try{
	$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
	if ($conn) {
		// echo "Connection Successfully.";

	}else{

		throw new Exception();
	
	}

}catch(Exception $e){
	echo $e->getMessage();
	exit('DB Connection Failed. !!'.mysqli_connect_error($conn));
}



 ?>