<?php 

$files_arr = $_FILES['document'];


$name = $files_arr['name'];
$type = $files_arr['type'];
$tmp_path = $files_arr['tmp_name'];
$error = $files_arr['error'];
$size = $files_arr['size'];

// print_r($name);
$file_info = pathinfo($name);

$filename = $file_info['filename'];
$extension = strtolower($file_info['extension']);

// echo $extension;
$new_file_name = $filename."_".time().".".$extension;
// echo $new_file_name;
$new_location = __DIR__."/upload/{$new_file_name}";
// echo $new_location;
if (move_uploaded_file($tmp_path, $new_location)) {
	echo "Uploaded succefully";
}else{
	echo "Oops somthing went wrong.";
}



 ?>