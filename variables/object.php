<?php

// wap in php to show , object using Claas

class Student{
	
	private $name='Brijesh';
	private $collage='M.P Polytechenic';
	private $roll_no=100229;
	private $branch='CSE';
}
$std=new Student();
var_dump($std);//user-defined ---> type Resource
?>