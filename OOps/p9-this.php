<?php 

class Test{

	public $number = 10;

	public function master(){
		echo $this->number;
	}
}
$t = new Test();
$t->master();


 ?>