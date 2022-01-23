<?php
// wap in php to show class and Objects in PHP

/**
 *
 */
class Tv
{
  var $model = 'XL TV'; // default or pulic modifier.
  var $type = 'LED';
  var $price = '43567';
  var $color = 'Black';
  var $varient = 'cured';

  public function showInformation()
  {
    echo "the model for".__class__."{$this ->model} \n";
    echo "the model for".__class__."{$this ->type} \n";
    echo "the model for".__class__."{$this ->price} \n";
    echo "the model for".__class__."{$this ->color} \n";
    echo "the model for".__class__."{$this ->varient} \n";
  }
  public function valume()
  {
    echo "valume up";
  }
}
$obj  = new Tv(); //Object
$obj->showInformation(); // Method Calling or function Calling
echo "Tv valume will be :";
echo "{$obj->valume()}";

?>
