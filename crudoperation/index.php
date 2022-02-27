<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

error_reporting(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $query = new Query();
// $user = $query->select('user')->table('login')->first();
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
	<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">STUDENT MANAGMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-evenly" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo url('show.php'); ?>">Show Record</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo url('logout.php'); ?>">Logout</a>
        </li>
      </ul>
      <div class="msg"><?php echo "Welcome : - ". $name ?></div>
    </div>
  </div>
</nav>
	<!-- end navbar -->
<div class="container ">
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