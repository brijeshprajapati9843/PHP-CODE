<?php 

$class_folder = scandir(dirname(__DIR__).'/class');
unset($class_folder[0],$class_folder[1]);


$allow_file = [
	'Student.php',
	'Teacher.php',
	'User.php'

];

foreach($class_folder as $file){
	if (in_array($file, $allow_file)) {
		require_once dirname(__DIR__).'/class/'.$file;
	}
}


 ?>