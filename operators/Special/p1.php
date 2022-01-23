<?php

//wap in php to string concatenation

$x = 'Brijesh';
$y = 'Prajapati';

var_dump(getType($x));
var_dump(getType($y));
echo $x.$y;

$x =10;
$y =20;
var_dump(getType(10));
var_dump(getType(20));
var_dump($x.$y);
var_dump(getType($x.$y));


// note :- PHP allows Mathematicals 
// Evaluation , Only after using brackets
// Other wise non-numeric Encountered
// Error will be thrown

?>