<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['validUser'])) {
	header('location:index.php');
}
echo "<h1 style='text-transform:uppercase;-'>Welcome :- ".$_SESSION['validUser']."</h1>";

 ?>

 <a href="logout.php">logout.php</a>