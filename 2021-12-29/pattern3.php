<?php

//wap in php to show Pattern 1 (*)

$x = readline("Enter The no of Row = ");
for($row = 0; $row <= $x; $row++)  // row 
{
	for($sp = 0; $sp < $row; $sp++) // space
	{
		printf("  ");
	}
	for($col = $row; $col <= $x; $col++) // column
	{
		printf("* ");
	}

	printf("\n");
}
// ***** 
 // ****
  // ***
   // **
    // *


// for($row = 0; $row <= $x; $row++)  // row 
// {
	// for($sp = $row; $sp < $x; $sp++) // space
	// {
		// printf("  ");
	// }
	// for($col = 0; $col <= $row; $col++) // column
	// {
		// printf("* ");
	// }
	// printf("\n");
// }

?>

 