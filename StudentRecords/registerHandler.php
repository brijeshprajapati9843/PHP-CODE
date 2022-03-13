<?php 

include __DIR__.'/db.php';

$username = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$files_arr = $_FILES['image'];
// print_r($files_arr);
$name = $files_arr['name'];
$type = $files_arr['type'];
$tmp_path = $files_arr['tmp_name'];
$error = $files_arr['error'];
$size = $files_arr['size'];

$file_info = pathinfo($name);

// print_r($file_info);
$file_ext = $file_info['extension'];
$filename = $file_info['filename'];

// echo $file_ext;

$new_file = $filename."-".time().".".$file_ext;
// echo $new_file;
$new_location = "uploads/{$new_file}";
// echo $new_location;
if (move_uploaded_file($tmp_path,$new_location)) {
	
	

	// $query1 = "SELECT * FROM register WHERE email = '$email'";
	// 	$run = mysqli_query($conn,$query1);
	// 	if (mysqli_num_rows($run)>0) {
	// 		$_SESSION['email_check'] = '1';
	// 		header("location:register.php");
	// 	}else{

			$query = "INSERT INTO register(name,email,contact,image,password) VALUES('$username','$email','$contact','$new_file','$password')";
			$run = mysqli_query($conn,$query);
				if ($run) {
					echo "<script>alert('Registration Successfully.')</script>";
					echo "<script>location.href = 'showrecords.php'</script>";

				}else{
					echo "<script>alert('Cannot Register!!')</script>";
					echo "<script>location.href = 'register.php'</script>";
				}
			
			 
		// }

}else{
	echo "Oops somthing Went Wrong!!";
}





 ?>