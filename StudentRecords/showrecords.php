<?php 

include __DIR__.'/db.php';

$sql = "SELECT * FROM register";
$run = mysqli_query($conn,$sql);
if (mysqli_num_rows($run)>0) {

	
}
session_start();
if (!isset($_SESSION['validUser'])) {
	header("location:login.php");
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style>
 		img
 		{
 			height: 100px;
 		}	
 	</style>
 </head>
 <body>
 	<table border="1" cellpadding="10px" cellspacing="0" style="text-align:center;" width="100%">
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Contact no</td>
		<td>Image</td>
	<tr>
		<?php while ($rows = mysqli_fetch_assoc($run)) { ?>
	<tr>
		<td><?php echo $rows['id']?></td>
		<td><?php echo $rows['name']?></td>
		<td><?php echo $rows['email']?></td>
		<td><?php echo $rows['contact']?></td>
		<td><?php echo "<img src='uploads/{$rows['image']}'>"?></td>
	</tr>
	<?php } ?>
</table>
 </body>
 </html>
 