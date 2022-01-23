<?php

//wap i php to show Modify Operators

$x=10;
$x=$x-1;
echo "The value of x without Assignment Operator = $x\n";

$x=10;
$x-=1;
echo "The value of x with Assignment Operator = $x\n";

$x=10;
$z=$x--;
echo "The value of x  Using Post Decrement Operator = $x And $z\n";

$x=10;
$z=--$x;
echo "The value of x  Using Pre Decrement Operator = $x And $z\n";



?>