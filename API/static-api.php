<?php 
// include_once __DIR__.'/data.json';

header("Content-Type:application/json");
$json = file_get_contents(__DIR__.'/data.json');
$student_Array = json_decode($json,true);
$students = $student_Array['data'];



print_r($students);




// $json = file_get_contents(__DIR__.'/data.json');
// $student_Array = json_decode($json,true);
// $students = $student_Array['data'];
 ?>