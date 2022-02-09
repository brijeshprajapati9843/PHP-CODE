<?php 
include_once __DIR__.'/functions.php';



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<?php include __DIR__.'/links/link.php'; ?>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-sm-4">
				<div class="card" style="max-width: 100%;">
			  <div class="card-body">

			    <h4 class="card-title text-center">Login</h4>
			    <p class="card-text text-center">Get Started with your Login </p>
			    <a href="mailto:brijeshprajapati9843@gmail.com" class="btn btn-danger mb-4 form-control"><i class="fab fa-google"></i>  Login via Google</a>
			    <a href="https://facebook.com" class="btn btn-info mb-4 form-control text-light"><i class="fab fa-facebook-f"></i> Login via Facebook</a>

			     <form action="<?php echo url("sign.php"); ?>" method="post">
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
					    <input type="text" class="form-control" placeholder="Enter Email" name="email">
					</div>
					 
					<div class="input-group mb-3">
					    <span class="input-group-text"><i class="fas fa-lock"></i></span>
					    <input type="password" class="form-control" placeholder="Enter Password" name="password">
					</div>
					 
					<div class="input-group mb-3">
					    <input type="submit" value="Login" class="btn btn-primary form-control fw-bold" >
					</div>
					<p>Create Account ? <a href="<?php echo url("index.php"); ?>">Sign Up</a></p>
			     </form>
			  </div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>