<?php

//wap in php to show local and global scope of variable

$a=10;

echo "The value of a at global scope is : $a";
echo PHP_EOL;

function display(){
global $a ;//get the variable from heap
echo "The value of global a at local scope is : $a";  
echo PHP_EOL;
$b=200;
echo "The value of global a at local scope is : $b";  
echo PHP_EOL;


}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";


?>