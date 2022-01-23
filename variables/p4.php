<?php
// wap in php to show boolean false

$x=false;
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);
echo PHP_EOL;
echo json_encode($x);// raw format

echo 'On Comparing the values :-';
echo (false==FALSE);
echo PHP_EOL;
each (FALSE==False);
echo PHP_EOL;
var_dump(0==false); //type is optional match

echo PHP_EOL;
var_dump(0==(int)false); //Implicit Type Conversion // PHP Dynamic 

echo PHP_EOL;
var_dump(0===false); // content match and type match = false

?>