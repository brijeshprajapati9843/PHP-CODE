<?php 

include_once __DIR__.'/db.php';

if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	 header("location:home.php");
}else{
	echo "Username or Password incorrect!!";
}



}

 ?>
 <h2>Login Here</h2>
 <hr>
 <form action="" method="post">
 	Email : <input type="text" name="email"><br><br>
 	Password : <input type="password" name="password"><br><br>
 	<input type="submit" name="submit"><br><br>
 </form>