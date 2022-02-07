<?php 
include_once __DIR__.'/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo url("registerhandler.php"); ?>" method="post">
		Name<input type="text" name="name"><br><br>
		Email<input type="email" name="email"><br><br>
		Mobile no<input type="number" name="mobile"><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>