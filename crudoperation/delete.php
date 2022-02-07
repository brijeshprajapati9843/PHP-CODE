<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$id = get('id');
if (!empty($id)) {
	$query = new Query();
	if ($query->delete('student')->where('id',$id)->commit()) {
		// echo "<script> alert ('Record Deleted Successfully....');</script>";
		header("location:".url("show.php?Status = Record Deleted"));

	}
	else
	{
		echo "Record Cannot Deleted..";
	}
}




 ?>