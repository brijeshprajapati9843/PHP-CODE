<?php 

$sum = 0;
$num = readline('Enter the number : ');
$temp = $num;
while ($num > 0) {
	
	$rem = $num % 10;
	$sum = $sum * 10 + $rem;
	$num = $num / 10;

}
if ($sum == $temp) {
	echo "This number is Polindrome.".$num;
}else
{
	echo "This number is not Polindrome";

}


 ?>