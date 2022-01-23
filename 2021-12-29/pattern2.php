<?php

//wap in php to show Pattern 1 (*)

$x = readline("Enter The no of Row = ");
$n=1;
for($row = 1; $row <=$x; $row++)
{
	for($sp = $x; $sp > $row; $sp--)
	{
		printf(" ");
	}
	for($col = 1; $col <= $row; $col++)
	{
		printf("$n ");
		$n++;
	}
	printf("\n");
}

?>