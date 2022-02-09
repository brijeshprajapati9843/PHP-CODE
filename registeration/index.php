<?php
include_once __DIR__.'/functions.php';

 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registeration</title>
	<?php include __DIR__.'/links/link.php'; ?>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-3">
			<div class="col-sm-4 col-md-4">
				<div class="card" style="max-width: 100%;">
			  <div class="card-body">

			    <h4 class="card-title text-center">Create Account</h4>
			    <p class="card-text text-center">Get Started with your Free Account </p>
			    <a href="#" class="btn btn-danger mb-4 form-control"> <i class="fab fa-google"></i>  Login via Google</a>
			    <a href="#" class="btn btn-info mb-4 form-control text-light"><i class="fab fa-facebook-f"></i>  Login via Facebook</a>

			    <p class="text-center divider-text">
			    	<span class="txt">OR</span>
			    </p>

			     <form action="<?php echo url("registerhandler.php"); ?>" method="post">
			     	<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-user"></i></span>
					    <input type="text" class="form-control" name="name" placeholder="Enter Username" required>
					</div>
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
					    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
					</div>
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-phone"></i></span>
					    <input type="number" class="form-control" name="phone" placeholder="Enter Phone no" required>
					</div>
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-lock"></i></span>
					    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
					</div>
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-lock"></i></span>
					    <input type="password" class="form-control" name="cpassword" placeholder="Enter Re-Password" required>
					</div>
					<div class="input-group mb-3">
					    <input type="submit" value="Create Account" name="submit" class="btn btn-primary form-control fw-bold" >
					</div>
					<p>Already Register ? <a href="<?php echo url("login.php"); ?>">log in</a></p>
			     </form>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>