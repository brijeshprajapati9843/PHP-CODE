<?php
//wap in php to show constructor and destructor in php

class Test
{
  public $a;
  public function __construct()
  {
    $this->a = 10;
    echo "called constructor Automatically";
    echo PHP_EOL;
  }
  public function wish()
  {
    echo PHP_EOL;
    echo "Hy Good Morning..";
    echo PHP_EOL;
  }
  public function __destruct()
  {
    echo "called destructor Automatically";
    echo PHP_EOL;
    unset($this->a);
    $this->show_a();

  }
  public function show_a()
  {
    echo "The value of a after destructor called = ".$this->a;
  }
}
$test = new Test();
echo $test->a;
$test->wish();
echo $test->a;
 ?>
