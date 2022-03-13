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
			height: 320px;
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
		<h2 class="header">Login</h2>
	<form action="loginHandler.php" method="post">
		Email :
		<input type="text" name="email" id="email" required />
		Password :
		<input type="password" name="password" id="pass" required />
		<input type="submit" value="Login" id="btn" />
	</form>
	<p>Already Register? <a href="register.php"> SignUp</a></p>
	</div>

	

</body>
</html>