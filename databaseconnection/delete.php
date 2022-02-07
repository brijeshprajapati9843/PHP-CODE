<?php 
include_once __DIR__.'/Query Bilder/updatequery.php';
include_once __DIR__.'/functions.php';

$id = get('id');

if (!empty($id)) {
	$query = new Query();
	if($query->delete('emp')->where('id',$id)->commit())
	{
		header("location:".url("show.php?status=record-deleted"));
	}
}else{
	echo "Record Cannot Deleted...";
}



 ?>