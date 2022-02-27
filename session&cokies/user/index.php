User Dashboard
<?php 

@session_start();
$session_data = $_SESSION['validUser'];


  ?>
  <h1>Welcome : - <?php echo $session_data->email ?></h1>

  <a href="logout.php">Logout</a>