<?php 
include_once __DIR__.'/functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4 login px-5">
				<h2 class="my-4">Login</h2>
				<form action="<?php echo url("sign.php");?>" method="post">
					<input type="text" name="name" class="form-control mb-5">
					<input type="password" name="password" class="form-control mb-5">
					<input type="submit" value="Submit" class="btn btn-info text-light fw-bold mb-5">
			    </form>
			</div>
		</div>
	</div>
<script src="js/bootstrap.js"></script>
</body>
</html>