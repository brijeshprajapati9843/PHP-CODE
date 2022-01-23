<?php
// we will include scanner.php
include 'scanner.php';

$name=input('Enter the name:');
echo $name;

echo PHP_EOL;  // meaning \n  new line echo json_encode(PHP_EOL)

$class= input('Enter the class :');
echo $class;

echo PHP_EOL; 
$sum=$name+$class;
echo "Sum of two number :".$sum;
//$age= input('Enter the age :');
//echo $age;
?>