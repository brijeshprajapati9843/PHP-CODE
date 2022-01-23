<?php
//wap in php to show odd and even using default case in switch

$x = readline('Enter the x value : ');
switch($x%2)  
{
	case 0:
		echo "$x is even";
	break;
	default:
		echo "$x is odd";
	break;
}

?>