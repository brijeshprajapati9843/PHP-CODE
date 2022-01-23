<?php

$n = readline('Enter the value : ');
if(is_perfect($n)){
	echo "$n is perfect number ";
}
else{
	echo "$n is not perfect number";
}
function is_perfect($n,$i=1,$sum=0)
{
	$return =($i==$n)?false: (($sum = $n % $i == 0)? $sum+$i :0)? true: is_perfect($n,$i+1,$sum);
}

?>