<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$query = new Query();
$record = $query->select('*')->table('student')->allRecords();
// print_r($record);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show All Records</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center mt-3">All Records</h2>
			<div class="col-sm-12">
				<a href="<?php echo url("index.php"); ?>" class="btn btn-info text-light fw-bold my-4">Add Student </a> 
				<table class="table table-danger table-striped text-center">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone no</th>
						<th>Class</th>
						<th>Roll no</th>
						<th colspan="2">Action</th>
					</tr>
					<tr>
						<?php 
						if ($record == 0) {
							echo "Record Not Found....";
						}else{
						foreach ($record as $row ){ ?>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->email; ?></td>
						<td><?php echo $row->mobile; ?></td>
						<td><?php echo $row->class; ?></td>
						<td><?php echo $row->roll_no ?></td>
						<td><a href="<?php echo url("edit.php?id={$row->id}"); ?>" class="btn btn-success fw-bold text-light edit-btn">Edit</a></td>
						<td><a href="javascript:confirmDelete('<?php echo $row->id ?>')" class="btn btn-danger fw-bold text-light edit-btn">Delete</a></td>
					</tr>
				<?php } }?>
				</table>
			</div>
		</div>
	</div>
<script src="js/bootstrap.js"></script>
<script>
	var confirmDelete = (id)=>
	{
		if (window.confirm('Are you sure Delete to Record ?')) {
			window.location.href="<?php echo url("delete.php?id="); ?>"+id;
		}
	}
</script>
</body>
</html>