<?php 

extract($_POST);

// $conn = mysqli_connect("sql3.freesqldatabase.com","sql3475634","GVQseHIFNu","sql3475634");
$conn = mysqli_connect("localhost:3308","root","","app2022");

// extract($_POST);


if (isset($_POST['hidden_id'])) {
	$id = $_POST['hidden_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$query = "UPDATE emp SET name='$name',email='$email' WHERE id='$id'";

	$run = mysqli_query($conn,$query);
	if ($run) {
		echo "Record Updated Successfully.";
	}
	else
	{
		echo "Record Cannot Updated Successfully.";
	}

}else{
	echo "Hidden id is required.";
}


 ?>