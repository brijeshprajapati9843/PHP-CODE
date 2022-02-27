<?php 

extract($_POST);

// $conn = mysqli_connect("sql3.freesqldatabase.com","sql3475634","GVQseHIFNu","sql3475634");
$conn = mysqli_connect("localhost:3308","root","","app2022");



$query = "INSERT INTO emp(name,email)VALUES('$name','$email')";

$run = mysqli_query($conn,$query);
if ($run) {
	echo "Inserted.";
}
else
{
	echo "Failed!!";
}


 ?>