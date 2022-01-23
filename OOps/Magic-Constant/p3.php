<?php
//wap in php to constant : __FUNCTION__ AND __CLASS__

class Tv
{
  public function display(){
    echo "Called from display method from class ".__CLASS__."=".__METHOD__;
    echo PHP_EOL;
    echo "Called from display method from class ".__CLASS__."=".__FUNCTION__;
    echo PHP_EOL;
    echo "Called from display method from class Tv = ".__CLASS__."::".__FUNCTION__;
    echo PHP_EOL;
    var_dump((__CLASS__."::".__FUNCTION__)==__METHOD__);
  }
}
function display(){
  echo "Called from display function : ".__METHOD__;
  echo PHP_EOL;
  echo "Called from display function : ".__FUNCTION__;
  echo PHP_EOL;
}
display();

$tv = new Tv();
$tv->display()

 ?>
