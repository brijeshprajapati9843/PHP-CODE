<a href="index.php">BACK</a>
<?php 

include __DIR__.'/db.php';

$query = "SELECT * FROM task_tbl";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) {
	echo "<table border='1' width='100%' cellpadding='6px' cellspacing='0'>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>";
	while ($rows = mysqli_fetch_assoc($result)) {
		echo "<tr>
			<td>".$rows['id']."</td>
			<td>".$rows['name']."</td>
			<td>".$rows['email']."</td>
			<td>".$rows['mobile']."</td>
			<td><a href = 'edit.php?id=".$rows['id']."'>Edit</a></td>
			<td><a href = 'delete.php?id=".$rows['id']."'>Delete</a></td>
		</tr>";
	}
	echo "</table>";
}else{
	echo "";
}



 ?>