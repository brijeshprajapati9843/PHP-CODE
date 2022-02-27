<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table
		{
			border-spacing: 0px;
		}
		td
		{
			border: 2px solid black;
			padding: 30px;
		}
		.bg{
			background-color: black;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<input type="number" name="num" required/>
		<input type="submit" value="Submit" name="submit"/>
	</form>
	<br><br>
	<table>
		<?php 
		if (isset($_POST['submit'])) {
			
		
			$num = $_POST['num'];

			for ($row=1; $row <= $num ; $row++) { 
				echo "<tr>";

				for ($col=1; $col <= $num ; $col++) {

					if (($row + $col)%2 == 0) {
					 	echo "<td class = 'bg'></td>";
					
					 } else{
						echo "<td></td>";
					}
				}
				
				echo "</tr>";
			}
		}
		 ?>
	</table>
</body>
</html>