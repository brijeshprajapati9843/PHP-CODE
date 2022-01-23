<?php
// wap in php to show inner Block Labelled chaining effect in switch

$n=readline('Enter the no B/W 1 to 9 :');
switch($n)
{
	case 1:
	{
		echo "case 1 is executing \n";
	}
	case 2:
	{
		echo "case 2 is executing \n";
	}	 
	case 3:
	{
		echo "case 3 is executing \n";
	}	
	case 4:
	{
		echo "case 4 is executing \n";
	}
	case 5:
	{
		echo "case 5 is executing \n";
	}
	case 6:
	{	
		echo "case 6 is executing \n";
	}
	case 7:
	{
		echo "case 7 is executing \n";
	}
	case 8:
	{
		echo "case 8 is executing \n";
	}
	case 9:
	{
		echo "case 9 is executing \n";
	}
	default:
	{
		echo "default case is executing";
	}
	exit_label:;
		//echo "exit label executing";
}


//Techpile@6555786
?>