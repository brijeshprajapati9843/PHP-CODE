<?php 

// echo "Successfully
// $conn = mysqli_connect("sql3.freesqldatabase.com","sql3475634","GVQseHIFNu","sql3475634");
$conn = mysqli_connect("localhost:3308","root","","app2022");


if (isset($_POST['record'])) {
	
	$query = "SELECT * FROM emp";

	$run = mysqli_query($conn,$query);

	// echo `<table border="1" width="100%">
	// 	<tr>
	// 	<td>ID</td>
	// 	<td>Name</td>
	// 	<td>Email</td>
	// 	</tr>`;
	
	if(mysqli_num_rows($run)>0){
		while ($rows = mysqli_fetch_assoc($run)) {
			echo "<tr>
			<td>".$rows['id']."</td>
			<td>".$rows['name']."</td>
			<td>".$rows['email']."</td>
			<td><button onclick='editRecord(".$rows['id'].")'>Edit</button></td>
			<td><button onclick='deleteRecord(".$rows['id'].")'>Delete</button></td>
			</tr>";
		}
		// echo "</table>";
		
	}
	// print_r($result);
}

 ?>