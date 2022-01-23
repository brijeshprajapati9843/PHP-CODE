<?php

//wap in php to show super global values power

 

$GLOBALS['A']=100;
$GLOBALS['B']=200;
 


function display()
{
	echo $GLOBALS['A'];
	echo PHP_EOL;
	echo $GLOBALS['B'];
	
	//$A = $GLOBALS['A'];
	//$B = $GLOBALS['B'];
	
	echo PHP_EOL;
	 
	extract($GLOBALS); 
	 
	echo $A;
	echo PHP_EOL;
	echo $B;
}
display();

?>