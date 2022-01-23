<?php

//supress Operator @ : supress Operator or Notice Operator : error Operator.

$x= 20;
echo "The value of x : $x";
echo PHP_EOL;

echo "The value of y : ".@$y; // undefined veriable y.

//$z = 10;

$z= isset($z)?$z:null;
echo PHP_EOL;
echo "The value of z using ternary: $z"; // undefined veriable z.
var_dump($z);

$z= isset($z)??null;
echo PHP_EOL;
echo "The value of z using NullCoalescing : $z"; // undefined veriable z.
var_dump($z);

$p = (5>2)??Null;
echo PHP_EOL;
var_dump($p);

if($p)
{
	echo 'P if Running by NullCoalescing';
}
else
{
	echo 'P else Running by NullCoalescing';
}


$p = (5>2)?'':Null;
echo PHP_EOL;
var_dump($p);

if($p)
{
	echo 'P if Running by Ternary';
}
else
{
	echo 'P else Running by Ternary';
}
?>