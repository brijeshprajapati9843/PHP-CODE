<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$query = new Query();
$user = $query->select('user')->table('login')->first();
// print_r($user);
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
	<span class="alert alert-success msg"><?php echo "Welcome : - ". $user->user . " prajapati"?></span>
	<div class="row justify-content-center mt-5">
		<div class="col-sm-5 register rounded px-4">
			<h2 class="text-center mt-3">REGISTRATION</h2>
			<form action="<?php echo url("registerhandler.php"); ?>" method="post">
				<label>Name <span class="text-danger">*</span> </label> 
				<input type="text" name="name" class="form-control mb-3">
				<label>Email <span class="text-danger">*</span></label>
				<input type="text" name="email" class="form-control mb-3">
				<label>Phone no <span class="text-danger">*</span></label>
				<input type="text" name="phone" class="form-control mb-3">
				<label>Class <span class="text-danger">*</span></label>
				<input type="text" name="class" class="form-control mb-3">
				<label>Roll no <span class="text-danger">*</span></label>
				<input type="text" name="rollno" class="form-control mb-3">
				<input type="submit" class="btn" value="Register">
			</form>
		</div>
		<!-- <div class="col-sm-8">
			
		</div> -->
	</div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>