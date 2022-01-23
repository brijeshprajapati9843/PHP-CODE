<?php

// wap in php to show here doc string syntax

$a=100;

echo <<<BLOCK
This a Here Doc String, $a \n 
		"This is again New ?line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;


$code = <<<BLOCK
This a Here Doc String, $a \n 
		"This is again New ?line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;

echo $code;


echo <<<ANYNAME
This a Here Doc String, $a \n 
		"This is again New ?line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

ANYNAME;
?>