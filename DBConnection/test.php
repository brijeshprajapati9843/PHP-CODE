<?php 

$arr = [
	'name'=>'brijesh',
	'mobile'=>'7524998203',
	'class'=>'Diploma'
];

$key = implode(",",array_keys($arr));
$value = implode("','",array_values($arr));
$sql = "INSERT INTO student ($key) values('$value')";

echo "$sql";
 ?>