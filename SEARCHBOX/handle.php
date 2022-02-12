<?php 

require_once __DIR__.'/query-builder/Query.php';

$email = $_POST['email'];

$query = new Query();
$records = $query->select("*")->table("emp")->where('email',$email)->allRecords();


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<table border="1" width="100%" cellspacing="0" cellpadding="10px" style="text-align: center;">
 		<tr>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Email</th>
 		</tr>
 		<tr>
 		<?php

 		if ($records > 0) {
 			
 			foreach($records as $data){  ?>

			<td><?php echo $data->id; ?></td>
			<td><?php echo $data->name; ?></td>
			<td><?php echo $data->email; ?></td>
		
 			</tr>

 		<?php
 		}

 		}else{

 			echo "No Record Found!!";

 		 } ?>
 	</table>
 </body>
 </html>