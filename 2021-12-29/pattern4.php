<?php

$x = readline("Enter The no of Row = ");
for($row = 0; $row <= $x; $row++)  // row 
{
	
	for($col = $x; $col >= $row; $col--) // column
	{
		printf("* ");
	}
	for($sp = 0; $sp < $row; $sp++) // space
	{
	    printf("  ");
	}
	for($col = $row; $col <= $x; $col++) // column
	{
		printf(" *");
	}

	printf("\n");
}
?>