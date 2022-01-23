<?php
class ABC
{
  public $first;
  public $second;
  function __construct($a,$b)
  {
    $this -> first=$a;
    $this -> second=$b;

  }
  function add()
  {
  $add= $this->first+$this->$second;
  echo "Sum of the two number :" .$add;
  }
  $Obj = new ABC(45,27);
  $Obj -> add();
}
 ?>
