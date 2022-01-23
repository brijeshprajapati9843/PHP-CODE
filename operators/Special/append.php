<?php

//wap in php to show append operation in string

$name = 'brijesh';
$lname = 'prajapati';

$name = $name.$lname;
echo $name;

echo PHP_EOL;
$name = 'brijesh';
$lname = 'prajapati';

$name .=$lname; // concate 
echo $name; 
echo PHP_EOL;
$name .=$lname;  // append
echo $name;


?>