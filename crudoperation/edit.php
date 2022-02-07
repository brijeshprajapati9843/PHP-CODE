<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$id = get('id');
if (!empty($id)) {
	$query = new Query();
	$record = $query->select("*")->table("student")->where('id',$id)->first();
	// print_r($record);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-5 register rounded px-4">
			<h2 class="text-center mt-3">UPDATE RECORDS</h2>
			<form action="<?php echo url("updatehandler.php"); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $record->id ?>" class="form-control mb-3">

				<label>Name</label>
				<input type="text" name="name" value="<?php echo $record->name ?>" class="form-control mb-3">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo $record->email ?>" class="form-control mb-3">
				<label>Phone no</label>
				<input type="text" name="phone" value="<?php echo $record->mobile ?>" class="form-control mb-3">
				<label>Class</label>
				<input type="text" name="class" value="<?php echo $record->class ?>" class="form-control mb-3">
				<label>Roll no</label>
				<input type="text" name="rollno" value="<?php echo $record->roll_no ?>" class="form-control mb-3">
				<input type="submit" class="btn" value="Update">
			</form>
		</div>
		<!-- <div class="col-sm-8">
			
		</div> -->
	</div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>