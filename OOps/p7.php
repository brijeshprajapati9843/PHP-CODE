<?php
//wap in php to show object and class

class Tv{

  public $color = 'black';
  public $size = '56inch';
  public $price = '25000';
  public $type = 'LED';
  public $company = 'LG';


  public function info()
  {
    echo "The color  : {$this ->color} \n";
    echo "The size  : {$this ->size} \n";
    echo "The price  : {$this ->price} \n";
    echo "The type  : {$this ->type} \n";
    echo "The company  : {$this ->company} \n";
  }
  public function on()
  {
    echo "Tv on \n";
  }
  public function off()
  {
    echo "Tv off \n";
  }
  public function volup()
  {
    echo "Tv volume++ \n";
  }
  public function voldown()
  {
    echo "Tv volume-- \n";
  }
}
// (new Tv)->info(); Anonymous Object
// (new Tv)->on(); Anonymous Object
$remote = new Tv;
$remote->info(); //Reference Object
$remote->on(); //Reference Object
$remote->off(); //Reference Object
$remote->volup(); //Reference Object
$remote->voldown(); //Reference Object


 ?>
