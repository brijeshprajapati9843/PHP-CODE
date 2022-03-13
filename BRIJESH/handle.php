<?php 

$conn = mysqli_connect("localhost:3308","root","","app2022");
if ($conn) {
	echo "Successfully";
}else{
	echo "db connection Failed.";
}
// extract($_POST);
// extract($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (0 < $_FILES['file']['error']) {
		echo "error" . $_FILES['file']['error'];
	}else{
		move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name']);
	}
	$sql = "INSERT INTO dataupload(firstname,lastname,email,new_file)VALUES('$firstname','$lastname','$email','$new_file')";
		


	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	$run = mysqli_query($conn,$sql);
		if ($run) {
			echo "Successfully inserted.";
		}else{
			echo "Failed!!";
		}
}
 ?>