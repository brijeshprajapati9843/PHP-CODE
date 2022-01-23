<?php
//wap in php to show setter and getter

class Test
{
  public $a = 10 ;
  public $b = 20;
  var $c=30;
  public function setvalue($a,$b,$c){
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
  }
  public function getvalue(){
    echo "The value of a from getter = {$this->a} \n";
    echo "The value of b from getter = {$this->b} \n";
    echo "The value of c from getter = {$this->c} \n";
  }
}
$test = new Test();
echo "The value of memeber a before setter {$test->a} \n";
echo "The value of memeber b before setter {$test->b} \n";
echo "The value of memeber c before setter {$test->c} \n";

$test-> setvalue(100,200,300); //setter
echo "The value of memeber a after setter {$test->a} \n";
echo "The value of memeber b after setter {$test->b} \n";
echo "The value of memeber c after setter {$test->c} \n";

$test->getvalue(100,200,300) ; //getter
  // echo "The value of a from getter = {$this->a} \n";
  // echo "The value of b from getter = {$this->b} \n";
  // echo "The value of c from getter = {$this->c} \n";
 ?>
