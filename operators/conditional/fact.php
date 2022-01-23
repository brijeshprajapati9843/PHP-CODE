<?php

$n = readline('Enter the number : ');
function fact($n)
{
	// if($n==1)
	// {
		// return 1;
	// }
	// else
	// {
		// return $n*fact($n-1);
	// }
	$output = ($n==1)? 1:$n * fact($n-1);
	echo $output;
}
 fact($n);

?>
// ocracal verctul box 
// kali linux