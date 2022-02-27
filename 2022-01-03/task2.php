<?php 

$num = readline('Enter Number : ');

for ($i=1; $i < $num ; $i++) { 
	for ($j=1; $j < $num ; $j++) { 
		if ($j <= ($num-$i)) {
			echo " ";
		}else{
			echo "*";
		}
	}
	echo "\n";
}
 ?>