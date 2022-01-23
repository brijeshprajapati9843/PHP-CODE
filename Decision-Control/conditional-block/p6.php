<?php
// wap in php to show odd even number without if statement
$n=readline('Enter the value : ');

// $output = ['even','odd'];
 // echo $output[$n%2];
 
$output = 'Odd';
if($n%2==0)
{
	$output = 'Even';
}
echo $output;
?>