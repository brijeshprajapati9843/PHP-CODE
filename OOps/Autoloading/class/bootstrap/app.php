<?php 


// require_once __DIR__.'/../classe/Student.php';

spl_autoload_register(function($classname){
	require_once __DIR__."/../classes/{$classname}.php";
});



 ?>