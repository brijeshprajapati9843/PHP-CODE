<?php 
$k = 3;
$num = readline('Enter Number : ');
for ($i=$num; $i > 0; $i--) { 
	for ($j=$i; $j < $num; $j++) { 
		echo "  ";
	}
	for ($k=1; $k < $i; $k++) { 
		echo "$k ";

	}

	// echo "<br/>";
	echo "\n";
}

 ?>