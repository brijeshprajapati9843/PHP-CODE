<?php
//wap in php to find the co-ordinate according to given Quadrant conditions
$x = readline('Enter the value : ');
$y = readline('Enter the value : ');

if($x>0 and $y>0)
	echo "1st Quadrant \n";
else if($x>0 and $y<0)
	echo "4th Quadrant \n";
else if($x<0 and $y>0)
	echo "2nd Quadrant \n";
else	
	echo "3rd Quadrant \n";

?>