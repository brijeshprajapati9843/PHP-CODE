<?php 

include __DIR__.'/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "UPDATE task_tbl SET name = '$name', email = '$email', mobile = '$mobile' WHERE id = '$id'";

$run = mysqli_query($conn, $query);
if ($run) {
	echo "<script>alert('Record Updated Successfully.')</script>";
	echo "<script>location.href = 'show.php'</script>";
}else{
	echo "<script>alert('Record Cannot Updated !!')</script>";
	echo "<script>location.href = 'show.php'</script>";
}




 ?>