<?php 

include_once __DIR__.'/db.php';
include_once __DIR__.'/style.php';

$sql = "SELECT * FROM upload";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {



 ?>
 <h2>Show Images</h2>
 <hr>
 <div class="container">
 	<?php while($rows = mysqli_fetch_object($result)){ ?>
 	<?php echo "<img src='upload/{$rows->filename}' id = '$rows->id'>"; ?>

 <?php }
 	} ?>
 </div>
 