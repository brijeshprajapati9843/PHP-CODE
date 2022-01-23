<?php

// wap to find the sum of all the arguments  supplied . from command line and Average
// Hint : $argv and $argc = count($argv)
//           |Array        |value
//$sum=0;
//$sum= 
//$avg = $sum/($argv-1)

 
	$sum=0;
	for($i=1; $i<$argc; $i++){
		$sum = $sum+(int)$argv[$i];
		
	}
printf("The Sum =%d \n",$sum);
printf("The Average =%d",$sum/($argc-1));
?>