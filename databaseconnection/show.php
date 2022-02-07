<?php 
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query Bilder/updatequery.php';

$query = new Query();
$records = $query->select('*')->table('emp')->allRecords();
if (empty($records)) {
		echo "Records Not Found...";
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shoe All Records</title>
</head>
<body>
	<a href="<?php echo url("register.php"); ?>">BACK REGISTER</a>
	<table style="width:100%; text-align:center;" border="1" cellpadding="10px" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile No</th>
			<th colspan="2">Action</th>
		</tr>
		<tr>
			<?php foreach($records as $row){ ?>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->mobile; ?></td>
			<td><a href="<?php echo url("edit.php?id={$row->id}"); ?>">Edit</a></td>
			<td><a href="<?php echo url("delete.php?id={$row->id}"); ?>">Delete</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>