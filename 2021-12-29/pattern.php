<?php 

//wap in php to show Pattern 1 (*)

$x=readline("Enter No Of Rows = ");
for($row = 1; $row <= $x; $row++)
{
	for($col = 1; $col <= $row; $col++)
	{
		printf("* ");
	}
	printf("\n");
}





?>