<?php
class Demo
{

  function add()
  {
    $x=400;
    $y=450;
    $sum=$x+$y;
    echo "Sum of the given number :".$sum."<br/>";
  }
  function sub()
  {
    $x=200;
    $y=150;
    $sub=$x-$y;
    echo "Sub of the given number :".$sub;
  }

}
$ob = new Demo();
$ob -> add();
$ob -> sub();


?>
