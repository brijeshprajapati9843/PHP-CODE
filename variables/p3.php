<?php
//wap in php to boolean data types stored in variables

$x=true;
echo $x;
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;

$y=TRUE;
echo $y;
echo PHP_EOL;
echo getType($y); //boolean
echo PHP_EOL;
var_dump($y);

echo PHP_EOL;

$z=True;
echo $z;
echo PHP_EOL;
echo getType($z); //boolean
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (true==True);
echo PHP_EOL;
echo PHP_EOL;
echo (1==TRUE);
echo PHP_EOL;
echo (1==True);
echo PHP_EOL;
?>