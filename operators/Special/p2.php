<?php

// wap in php to make user defined str_repeat function which, repeat the string n no of time

function string_repeat($str='',$n=0)
{
	if($n==0)
	{
		return $str;
	}
	$x = '';
	for($i=0; $i<$n; $i++)
	{
		$x.=$str;
	}
	return $x;
}
$a = readline('Enter a String : ');
$n = readline('How many times to be repeated : ');
echo string_repeat($a,$n);
?>