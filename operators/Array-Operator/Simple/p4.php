<?php

// wap in php to show Array operator duplicate subscript

$x=[10,20,40,'ravi'];
$y[0]=50;
$y[1]=100;
$y[2]=200;
$y[3]= 300;

echo "The count of x ".count($x);
echo PHP_EOL;
echo "The count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);
print_r($y);
print_r($y);
print_r($y);
print_r($x+$y);
print_r($y+$x);

var_dump(($x+$y)==($y+$x)); // equal
var_dump(($x+$y)!=($y+$x)); // Not equal
var_dump(($x+$y)===($y+$x)); // equal Not Identical
var_dump(($x+$y)!==($y+$x)); // Not equal Not Identical
var_dump(($x+$y)===($x+$y)); // equal and Identical
var_dump(($y+$x)===($y+$x)); // equal and Identical



?>