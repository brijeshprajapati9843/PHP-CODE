<?php 

include_once __DIR__.'/db.php';

if (isset($_POST['submit'])) {
	$files_arr = $_FILES['document'];
	// print_r($files_arr);
	$name = $files_arr['name'];
	$type = $files_arr['type'];
	$tmp_path = $files_arr['tmp_name'];
	$error = $files_arr['error'];
	$size = $files_arr['size'];

if ($error == 0) {
		
	$file_info = pathinfo($name);
	// print_r($file_info);
	$extension = $file_info['extension'];
	$filename = $file_info['filename'];

	$new_file = $filename."_".time().".".$extension;
	// echo "$new_file";

	$new_location = __DIR__."/upload/{$new_file}";
	// echo "$new_location";
	if (move_uploaded_file($tmp_path,$new_location)) {
		// echo "Successfully uploaded.";
		$sql = "INSERT INTO upload(filename)VALUES('$new_file')";
		if (mysqli_query($conn,$sql)) {
			header("location:show.php");

		}else{
			echo "Cannot Uploaded in Database.";
		}
	}else{
		echo "Cannot Uploaded in Folder.";
	}

}else{
	echo "Oops somthing Went Wrong!!";
}



}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Upload Images</h2>
	<hr>
	<form action="" method="post" enctype="multipart/form-data">
		Upload Pic :<input type="file" name="document"><br><br>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>