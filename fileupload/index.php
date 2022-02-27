<?php 
require_once __DIR__.'/DBConnection/query.php';
include_once __DIR__.'/style.php';
 ?>
<a href="delete.php">Delete</a>
<p style="color:red;">Please Document Upload to JPG,JPEG,PNG and minimum size 20KB and maximum size 50KB</p>
<form action="uploadController.php" method="post" enctype="multipart/form-data">
	Upload Docment : <br>
	<input type="file" name="document" required><br><br>
	<input type="submit" value="Submit">

</form>

<div class="container">
	<h1>Uploaded Document</h1>
	<?php 
	$query = new Query();
	$record = $query->select("*")->table("upload_image")->allRecords();
		 
	 ?>
	 <?php foreach ($record as $data) { ?>
	 
	 <div class="gallery">
	 	<img src="<?php echo "upload/{$data->filename}" ?>" alt="">
	 </div>
	<?php } ?>
</div>