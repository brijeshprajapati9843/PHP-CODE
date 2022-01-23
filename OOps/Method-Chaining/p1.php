<?php
//wap in php to show method chaining 

class Test{
public function a()
{
echo "a is called \n";
return this;
}

$test = new Test();
$test -> a();
?>