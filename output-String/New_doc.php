  <?php

// wap in php to show new doc string syntax

$a=100;

echo <<<'BLOCK'
This a new Doc String, $a \n 
		"This is again New ?line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;


 
?>