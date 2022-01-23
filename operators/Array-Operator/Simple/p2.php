<?php

// wap in php to + Operation in Array with Duplicate Subscript

$x=[10,20,40,50,'ravi'];
$y[0]= 600;
$y[1]=100;
$y[2]=200;
$y[3]= 300;
$y[4]= 400;
$y[5]= 500;

print_r($x);
print_r($y);
print_r($x+$y); // $x.add($y)
print_r($y+$x); //$y.add($x)

//subscript unique : Add
//Subscript duplicate : over-write 
// latest value , will be stored.
?>