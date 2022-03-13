<?php 
session_start();
$massage = '';
if (isset($_SESSION['email_check'])) {
	$massage = "Email Already Exists.";
	// echo "<script>alert('Email Already Exists.')<script>";
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register</title>
</head>
<body>
	<form action="handleRegister.php" method="post" onsubmit="return valid()" enctype="multipart/form-data">
		<h2><?php echo $massage ?></h2>
		First Name : <input type="text" name="firstname"><br><br>
		Last Name : <input type="text" name="lastname"><br><br>
		Email : <input type="text" name="email"><br><br>
		Phone : <input type="text" name="phone" id="phone"><br><br>
		Password : <input type="password" name="password" id="pass"><br><br>
		Confirm Password : <input type="password" name="cpassword" id="cpass"><br><br>
		Image : <input type="file" name="document"><br><br>
		<input type="submit" value="Register">
	</form>
<?php unset($_SESSION['email_check']); ?>
	<script>
		function valid(){
			var phone = document.getElementById('phone').value
			if (phone.length == 10) {
				// alert('valid phone no');
			}else{
				alert('Phone No Must be 10 digit');
				return false;
			}

			var pass = document.getElementById('pass').value
			var cpass = document.getElementById('cpass').value
			if (pass == cpass) {

			}else{
				alert('Password Mismatch');
				return false;
			}
		}


	</script>
</body>
</html>