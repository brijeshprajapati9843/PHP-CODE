<?php 

require_once __DIR__.'/../bootstrap/app.php';


class Student{

	public function __construct()
	{
		echo "Called from Student Construct </br>";
	}
	public function msg(){
		echo "Welcome to Student panel";
	}
}



 ?>
