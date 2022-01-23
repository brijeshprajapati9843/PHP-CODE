<?php
//wap in php to show syntax Error
//Since we cannot re-declare the signture(or definition ) of Function since it
// generates the , Fatal Error , hence it is possible at least in php  for the current 
// Version to support method overloading

function test()
{
echo "Hello from Test function ".PHP_EOL;
}
test();
//Re-declaration of Test Function 
function test()
{
echo "Hello form Test Function".PHP_EOL;
}
$a=10;
echo $a;
?>