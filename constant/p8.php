<?php

// wap in php to show constants are global inside class

printf("************START OF GLOBAL SCOPE************* \n");
define("name","brijesh");
//printf("%s",name);
$clss= "diploma";

class Test{
	private $c;
	private $N;
	
	public function __construct(){
	
	$this->N=name;
	$this->c=$class;
	
	printf("The value of name inside method = %s \n",name); // constant is global
	printf("The Value Of class inside method = %s \n",$class); // variable is local
	
	printf("The value of class using c for class :%d \n",$this->c);
	printf("The value of class using N for class :%s \n",$this->N);
}
}
$test = new Test();



?>