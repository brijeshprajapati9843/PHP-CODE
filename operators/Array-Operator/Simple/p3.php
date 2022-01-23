<?php

$x=[10,20,40,'ravi'];
$y[4]=50;
$y[5]=100;
$y[6]=200;
$y[7]= 300;

echo "The count of x ".count($x);
echo PHP_EOL;
echo "The count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x+$y);
print_r($y+$x);

var_dump(($x+$y)==($y+$x)); // equal
var_dump(($x+$y)===($y+$x)); // equal Not Identical
var_dump(($x+$y)===($x+$y)); // equal and Identical
var_dump(($y+$x)===($y+$x)); // equal and Identical



?>