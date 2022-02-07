<?php
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$query = new Query();
$records = $query->select('*')->table('st_detail')->allRecords();
// print_r($records);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show Records</title>
</head>
<body>
	<table style="width:100%; text-align:center;" border="1" cellpadding="10px" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Class</th>
			<th colspan="2">Action</th>
		</tr>
		<tr >
			<?php foreach($records as $row){ ?>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->sname; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->mobile; ?></td>
			<td><?php echo $row->class; ?></td>
			<td><a href="<?php echo url("edit.php?id={$row->id}"); ?>">Edit</a></td>
			<td><a href="<?php echo url("delete.php?id={$row->id}"); ?>">Delete</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>