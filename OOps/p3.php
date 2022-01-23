<?php
//wap in php to show , Instance Variables and Instance

class Test{

  var $a = 10 ;
  var $b = 20 ;
  var $c = 30 ;
}

$x = 20;

$test = new Test();
var_dump($test); // Instance

var_dump($test instanceof Test); // InstanceOf Operator : used to check if the given object is instance of Test or not 
var_dump($x instanceof Test);
 ?>
