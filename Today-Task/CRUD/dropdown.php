<?php 

include __DIR__."/db.php";

$sql = "SELECT * FROM department";
$result = mysqli_query($conn,$sql);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form action="">
 		Select Department : 
 		<select name="department">
 			<option value="">Select</option>
 			<?php if (mysqli_num_rows($result)>0) :?>
 				<?php while($row = mysqli_fetch_assoc($result)): ?>

 					<option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>

 				<?php endwhile; ?>
			<?php endif; ?>
 		</select>
 	</form>
 </body>
 </html>