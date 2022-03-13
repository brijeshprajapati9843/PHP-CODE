<?php 
session_start();
include_once __DIR__.'/db.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$files_arr = $_FILES['document'];

$name = $files_arr['name'];
$type = $files_arr['type'];
$error = $files_arr['error'];
$tmp_path = $files_arr['tmp_name'];
$size = $files_arr['size'];

// print_r($files_arr);
$file_info = pathinfo($name); 

$filename = $file_info['filename'];
$file_ext = strtolower($file_info['extension']);

$new_file = $filename."_".time().".".$file_ext;
// echo $new_file;
$new_location = __DIR__."/uploads/{$new_file}";
if (move_uploaded_file($tmp_path,$new_location)) {


		$query1 = "SELECT * FROM register WHERE email = '$email'";
		$run = mysqli_query($conn,$query1);
		if (mysqli_num_rows($run)>0) {
			$_SESSION['email_check'] = '1';
			header("location:register.php");
		}else{

			$query = "INSERT INTO register(firstname,lastname,email,phone,password,cpassword,image) VALUES('$firstname','$lastname','$email','$phone','$password','$cpassword','$new_file')";
			$run = mysqli_query($conn,$query);
				if ($run) {
					echo "<script>alert('Register Successfully.')</script>";
				}else{
					echo "<script>alert('Cannot Register!!')</script>";
				}
			
			 
		}
	}


	
 ?>