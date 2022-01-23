<?php
//wap in php to show , variables and methods in PHP

class Test{
  var $a=10;
  var $b=20;
  function add()
  {
    $a=100; //stack
    $b=200; //stack
    echo "Sum of Local variable =";
    echo $a+$b;
    echo "\n";
    // $test = new Test;
    echo "Sum of instance variable = ";
    echo $this->a +$this->b;
    // echo (new Test)->a+(new Test)->b;
  }
}
$test=new Test();
$test->add();
 ?>
