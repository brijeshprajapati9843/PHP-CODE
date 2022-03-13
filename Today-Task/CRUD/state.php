<?php 
include_once __DIR__.'/db.php';

if (isset($_POST['submit']) && !empty('state')) {
	$state = $_POST['state'];
	$sql = "INSERT INTO state(name)VALUES('$state')";
	if (mysqli_query($conn,$sql)) {
		header('location:state.php');
	}else{
		echo "Cannot Inserted.";
	}
}
$sql1 = "SELECT * FROM state";
$result = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) :

 ?>
<html>
<body>
 	<form action="" method="post">
 		State Name :<br><input type="text" name="state"><br><br>
 		<input type="submit" value="Submit" name="submit"><br><br>

 		Select State :
 		<select>
 			<option value="">Select State</option>
 			 <?php while($state = mysqli_fetch_assoc($result)): ?>
 			 	<option value="<?php echo $state['id']; ?>">
 			 		<?php echo $state['name']; ?>
 			 	</option>
 			 <?php endwhile; ?>
 			 <?php else; ?>
 			 	No Records Found.
 			<?php endif; ?>

 		</select>
 	</form>
 </body>
 </html>