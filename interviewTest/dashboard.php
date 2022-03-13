<?php 

include __DIR__.'/db.php';
include __DIR__.'/style.php';


session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}

$userdata = $_SESSION['user'];

// print_r($userdata['firstname']);

 ?>
<div class="card">
	<!-- <?php echo "<img src = 'uploads/{$userdata['image']}'>"; ?>
	<h2>Welcome :- <?php echo $userdata['firstname']; ?></h2> -->


<table cellpadding="10px" border="1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Photo</th>
	</tr>
	<tr>
		<td><?php echo $userdata['firstname']; ?></td>
		<td><?php echo $userdata['email']; ?></td>
		<td><?php echo "<img src = 'uploads/{$userdata['image']}'>"; ?></td>
	</tr>
</table>
</div>