<?php
// wap in ph php to show , Empty class

class Test
{
  var $a=10;
  var $b=20;
  var $c=30;
}
$test = new Test();  // Instantiation
var_dump($test);
$test = Test(); //Assignment
var_dump($test);
$test = 10; //Assignment
var_dump($test);
function Test()
{
  return 'Hy Form test function';
}
 ?>
