<?php 

session_start();
if (!isset($_SESSION['validUser'])) {
	header("location:login.php");
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body
		{
			align-items: center;
			display: flex;
			justify-content: center;
			height: 100vh;
		}
		.container
		{
			height: 450px;
			width: 300px;
			background-color: #A3F3D6;
			padding: 5px 20px;
			box-sizing: border-box;
			/*margin: 100px auto;*/
		}
		.container input
		{
			height: 30px;
			width: 100%;
			margin-bottom: 15px;
			padding-left: 10px;
			box-sizing: border-box;
		}
		#btn
		{
			height: 35px;
			width: 100%;	
			background-color: green;
			margin-top: 10px;
			color: white;
			font-weight: bolder;
		}
		.header
		{
			text-align: center;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="header">Registration</h2>
	<form action="registerHandler.php" method="post" enctype="multipart/form-data" onsubmit="return validuser()">
		Name : <br>
		<input type="text" name="name" id="name" required />
		Email :
		<input type="text" name="email" id="email" required />
		Contact :
		<input type="text" name="contact" id="contact" required />
		Upload Image :
		<input type="file" name="image"/>
		Password :
		<input type="password" name="password" id="pass" required />
		<input type="submit" value="Register" id="btn" />

	</form>
	</div>

	<script>
		function validuser(){
			var name = document.getElementById('name').value
			var email = document.getElementById('email').value
			var contact = document.getElementById('contact').value

			if (name.length > 2) {

			}else{
				alert('Name minimum 3 character and more.');
				return false;
			}
			if (contact.length == 10) {

			}else{
				alert('Contact no must be enter 10 digit.');
				return false;
			}
		}
	</script>
</body>
</html>