<?php 

include_once __DIR__.'/functions.php';

error_reporting(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include __DIR__.'/links/link.php'; ?>

</head>
<body>
	<div class="container-fluid">

		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="#">Navbar</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="<?php echo url("logout.php"); ?>">Logout</a>
			        </li>
			        
			      </ul>
			      <form class="d-flex">
			         <span class="text-light"> Welcome :- 
			         	<?php 
							session_start();
							echo $_SESSION['email']; 
						?>
					  </span>
			      </form>
			    </div>
			  </div>
			</nav>
		</div>

		<div class="row">
			<div class="banner">
				 
			</div>
		</div>
	</div>
</body>
</html>