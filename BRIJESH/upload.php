<?php
//print_r($_FILES);	//Check all $_FILES variables
$files=$_FILES['fileupload'];
$tmp_name=$files['tmp_name'];
$name=$files['name'];
$destination=$name;
$res=move_uploaded_file($tmp_name, $destination);
if($res) {
	$msg='Uploaded successfully';
}
else {
	$msg='Error';
}
echo $msg;
?>