<?php
//wap in php to find the reverse numbers

$no = readline('Enter the no:');
$count = strlen($no);
// $count=count(str_split($no));
$sum = 0;
//while($no!=0)
 for($no=$no;$no!=0; $count--)
{
	$q = $no/10;
	$rem = $no%10;
	$ef = $rem * (pow(10,$count-1));
	$sum = $sum + $ef;
	$no = $q;
	//$count--
}
echo $sum;
?>