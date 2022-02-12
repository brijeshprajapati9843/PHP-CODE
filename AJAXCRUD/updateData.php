<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$id = $mydata['sid'];

$query = new Query();
$records = $query->select("*")->table("student")->where("id",$id)->first();

echo json_encode($records);

// $query->update('student',[


// ])->where('id',$id)->commit();




 ?>