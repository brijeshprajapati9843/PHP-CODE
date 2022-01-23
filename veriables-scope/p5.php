<?php

//wap in php to show super global values

$a = 20;
$b = 30;

//print_r($GLOBALS);


function display()
{
	$a = 100;
	$b = 200;
	echo PHP_EOL;
	echo "The value of a from local : $a";
	echo PHP_EOL;
	echo "The value of b from local : $b";
	echo PHP_EOL;
	echo "The value of a from global using SG : {$GLOBALS['a']}";
	echo PHP_EOL;
	echo "The value of a from global using SG : {$GLOBALS['b']}";
	echo PHP_EOL;
	
	$a = $GLOBALS['a'];
	$b = $GLOBALS['b'];
	echo "The value of a from global without global keyword :$a";
	echo PHP_EOL;
	echo "The value of a from global without global keyword :$b";
	
	echo PHP_EOL;
	//global $a,$b;
	extract($GLOBALS);
	echo "The value of a from global :$a";
	echo PHP_EOL;
	echo "The value of a from global :$b";
}
display();

?>