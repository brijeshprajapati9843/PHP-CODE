<?php 
include_once __DIR__.'/db.php';
if (isset($_POST['submit']) && !empty('city')) {
	$city = $_POST['city'];
	$sql = "INSERT INTO city(name)VALUES('$city')";
	if (mysqli_query($conn,$sql)) {
		header('location:city.php');
	}else{
		echo "Cannot Inserted.";
	}
}
$sql1 = "SELECT * FROM city";
$result = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) :
	

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Select City</title>
 </head>
 <body>
 	<form action="" method="post">
 		City Name :<br><input type="text" name="city"><br><br>
 		<input type="submit" value="Submit" name="submit"><br><br>

 		Select City :
 		<select>
 			<option value="">Select City</option>
 			<?php while ($city = mysqli_fetch_assoc($result)): ?>
 			<option value="<?php echo $city['id']; ?>">
 				<?php echo $city['name']; ?>
 			</option>
 		<?php endwhile; ?>
 	<?php endif; ?>
 		</select>
 	</form>
 	<hr>
 </body>
 </html>