<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$id = $mydata['sid'];

if (!empty($id)) {
	$query = new Query();
	if ($query->delete('student')->where('id',$id)->commit()) {
		echo "Record Deleted Successfully.";
	}else{
		echo "Record Cannot Deleted!!";
	}
}else{
	echo "Id Cannot Empty";
}


 ?>