<?php 

require_once __DIR__.'/bootstrap/app.php';



echo '<pre>';
print_r(get_included_files());

$student = new Student();
$teacher = new Teacher();
$principal = new Principal();

echo $student->msg();



 ?>