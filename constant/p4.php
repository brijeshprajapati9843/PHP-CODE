<?php

// wap in php to show re-declearation error in constants

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY','brijesh');
echo GRAVITY;

// re-define constants

define('gravity',1);
echo gravity;
// User defined contants :- Notice: Constant gravity already defined in 
//C:\laragon\www\APP2021\constant\p4.php on line 14
?>