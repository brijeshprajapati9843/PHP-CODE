<?php 

include __DIR__.'/db.php';

$id = $_GET['id'];
// echo $id;

$query = "SELECT * FROM task_tbl WHERE id = $id";
$run = mysqli_query($conn,$query);

if (mysqli_num_rows($run)>0) {
	$rows = mysqli_fetch_assoc($run);
	// print_r($rows);
}else{
	echo "Records Not Found!!";
}

 ?>

 <form action="UpdateHandler.php" method="post">
 	<input type="hidden" name="id" value="<?php echo $rows['id'] ?>" /> 
 	Name : <input type="text" name="name" value="<?php echo $rows['name'] ?>" /><br><br>
	Email : <input type="text" name="email" value="<?php echo $rows['email'] ?>" /><br><br>
	Mobile : <input type="number" name="mobile" value="<?php echo $rows['mobile'] ?>" /><br><br>
	<input type="submit" value="Update">
 </form>