<?php 
require_once __DIR__.'/DBConnection/query.php';

$files_arr = $_FILES['document'];

$name = $files_arr['name'];
$type = $files_arr['type'];
$error = $files_arr['error'];
$tmp_path = $files_arr['tmp_name'];
$size = $files_arr['size'];
$file_info = pathinfo($name);
// echo'<pre>';
// print_r($files_arr);
// echo "</br>";
// print_r($file_info);
// echo "$size";

$filename = $file_info['filename'];
$file_ext = strtolower($file_info['extension']);

// $file_ext = @strtolower(end(explode('.', $files_arr['name'])));

$extension = array('jpg','png','jpeg');

// // echo($file_ext);
// // echo $extension[0];

// Check the valid Extention
if (in_array($file_ext,$extension) === false) {
	echo "This File Extension not Allowed please choose a JPG ,JPEG or PNG file.";
}else{
	// Check the Valid Size 
	if ($size > 20480 && $size < 5100000) {
		$new_file = $filename."_".time().".".$file_ext;
		// echo $new_file;
		$new_location = __DIR__."/upload/{$new_file}";
		if (move_uploaded_file($tmp_path, $new_location)) {
			// echo "<script>alert('Successfully uploaded!!')</script>";
			$query = new Query();
			if($query->insert('upload_image',[
				'filename'=>$new_file
			])){
				echo "<script>alert('Successfully uploaded!!')</script>";
				echo "<script>window.location.href='index.php'</script>";
			}
		}
	}
	else{
		echo "<script>alert('Upload Document minimum 20kb to maximum 50kb!!')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	
 }


 ?>
