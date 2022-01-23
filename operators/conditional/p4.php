<?php

// wap in php to find perfect number 

$a = readline('Enter number = '); 
$sum=0;
for($i=1; $i < $a; $i++)
{
	if($a % $i ==0)
	{
		$sum = $sum + $i;
	}
}
if($sum==$a)
{
	echo "The number $sum is Perfect";
}
else
{
	echo "Number is not Perfect";
}
?>