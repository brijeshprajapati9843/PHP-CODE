<?php 
include_once __DIR__.'/db.php';

if (isset($_POST['submit']) && !empty('country')) {
	$country = $_POST['country'];
	$sql = "INSERT INTO country(name)VALUES('$country')";
	if (mysqli_query($conn,$sql)) {
		header('location:country.php');
	}else{
		echo "Cannot Inserted.";
	}
}
$sql1 = "SELECT * FROM country";
$result = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) :

 ?>
<html>
<body>
 	<form action="" method="post">
 		Country Name :<br><input type="text" name="country"><br><br>
 		<input type="submit" value="Submit" name="submit"><br><br>
 		<hr>
 		Select Country :
 		<select>
 			<option value="">Select Country</option>
 			 <?php while($country = mysqli_fetch_assoc($result)): ?>
 			 	<option value="<?php echo $country['id']; ?>">
 			 		<?php echo $country['name']; ?>
 			 	</option>
 			 <?php endwhile; ?>
 			 <?php else ?>
 					No Record Found.
 			<?php endif; ?>
 		</select>
 	</form>
 </body>
 </html>