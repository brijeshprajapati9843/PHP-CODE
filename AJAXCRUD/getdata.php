<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

$query = new Query();

$records = $query->select("*")->table('student')->allRecords();

// print_r($response);

// retuening JSON format
echo json_encode($records);


 ?>