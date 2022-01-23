<?php

//wap in php to show local and global scope of variable

$a=10;

echo "The value of a at global scope is : $a";
echo PHP_EOL;

function display(){
echo "The value of global a at local scope is : $a"; //Undefined variable
echo PHP_EOL;


}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";


?>