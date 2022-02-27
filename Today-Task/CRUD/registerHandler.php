<?php 

include __DIR__."/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

// echo $name;
$query = "INSERT INTO task_tbl(name,email,mobile)VALUES('$name','$email','$mobile')";
$run = mysqli_query($conn,$query);
if ($run) {
	// echo "Record Inserted Successfully.";
	echo "<script>alert('Record Inserted Successfully.')</script>";
	echo "<script>location.href = 'show.php'</script>";
}else{
	echo "Record Cannot Inserted.";
}









 ?>