<?php
//wap in php to find the reverse numbers

$no = readline('Enter the no:');
$count = readline('Enter the no count :');
$sum = 0;
while(true)
// for(;;)
{
	$q = $no/10;
	$rem = $no%10;
	$ef = $rem * (pow(10,$count-1));
	$sum = $sum + $ef;
	$no = $q;
	$count--;
	
	if($no==0){
		break;
	}
}
echo $sum;
?>