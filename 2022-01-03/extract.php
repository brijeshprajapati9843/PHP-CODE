<?php 

$array_data = ['name'=>'rajesh', 'email'=>'rajesh@gmail.com'];
// print_r($array_data1);
extract($array_data);

// echo $name;
// echo "<br>";
// echo $email;

$conn = mysqli_connect("localhost:3308","root","","app2022") or exit();

$query = "INSERT INTO emp(name,email)VALUES('$name','$email')";

$run = mysqli_query($conn , $query);
if ($run) {
	echo "Inserted";
}else
{
	echo "Failed!!";
}


 ?>