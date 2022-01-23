<?php
//wap in php to show parameterised constructor

class Test{
  // public function __construct($name,$branch){
  //   echo $name;
  //   echo PHP_EOL;
  //   echo $branch;
  // }
  public function __construct(){
  echo "Constructor Running...";
  }
}
// $test = new Test('Brijesh kumar','Diploma in CSE');
$test = new Test;
// $test = new Test();
$test->__construct();

 ?>
