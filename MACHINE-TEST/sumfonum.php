<?php 

function sum($n){
	$sum = 0;
	
	for ($i=2; $i < $n ; $i++) { 
		$sum = $sum+$i;
	}
	return $sum;
}

$n = readline("Enter the number : ");
echo "All Even Number Sum = ".sum($n);
 ?>