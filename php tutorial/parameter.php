<?php
class Demo
{

  function add($x,$y)
  {

    $sum=$x+$y;
    echo "Sum of the given number :".$sum."<br/>";
  }
  function sub($x,$y)
  {

    $sub=$x-$y;
    echo "Sub of the given number :".$sub;
  }

}
$ob = new Demo();
$ob -> add(23,35);
$ob -> sub(34,10);


?>
