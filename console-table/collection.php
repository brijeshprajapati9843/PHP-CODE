<?php
//wap in PHP to connect Array of Object to Associative Array

$json = file_get_contents(__DIR__.'/student.json');
$student_Array = json_decode($json,true);
$students = $student_Array['data'];
//print_r($student_Array);
?>