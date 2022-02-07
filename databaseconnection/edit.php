<?php 
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query Bilder/updatequery.php';

$id = get('id');
if (!empty($id)) {
	$query = new Query();
	$record = $query->select('*')->table('emp')->where('id',$id)->first();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo url("controlupdate.php"); ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $record->id; ?>">
		Name<input type="text" name="name" value="<?php echo $record->name; ?>"><br><br>
		Email<input type="email" name="email" value="<?php echo $record->email; ?>"><br><br>
		Mobile no<input type="number" name="mobile" value="<?php echo $record->mobile ?>"><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>