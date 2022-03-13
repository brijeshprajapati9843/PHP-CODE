<?php 

$num1 = readline('Enter First Number : ');
$num2 = readline('Enter Second Number : ');


// $num1 = $num1 - $num2;
// $num2 = $num1 + $num2;
// $num1 = $num2 - $num1;

$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "First Number : ".$num1;
echo PHP_EOL;
echo "Second Number :".$num2;
 ?>