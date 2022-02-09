<?php 
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$name = post('name');
$pass = post('password');


$query = new Query();

try{

	error_reporting(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$records = $query->select('*')->table('login')->where(['user'=>$name , 'pass'=>$pass])->first();

// print_r($records);
	if ($name==$records->user && $pass == $records->pass) {
		
		session_start();

		// $_SESSION['name'] = $name;
		// $_SESSION['password'] = $password;

		header("location:".url("index.php"));
		echo "Welcome :- {$user->user}";

	}else
	{
		throw new Exception();
}
}catch(Exception $e){
	// echo $e->getMessage();
	
	// header("location:".url("login.php"));
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="alert alert-danger" role="alert">
		  <?php 
			  echo 'Username or Password incorrect...';
			  echo $e->getMessage();
		   ?>
	</div>
	<a href="<?php echo url('login.php'); ?>" class="btn btn-info">BACK LOGIN</a>
 </body>
 </html>