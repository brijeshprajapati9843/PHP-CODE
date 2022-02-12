<?php 

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$name = $mydata['name'];
$email = $mydata['email'];
$phone = $mydata['phone'];
$class = $mydata['class'];
 


$query = new Query();
if (!empty($name) && !empty($email) && !empty($phone) && !empty($class) ) {
	if ($query->insert('student',[

	'name'=>$name,
	'email'=>$email,
	'phone'=>$phone,
	'class'=>$class,
	 

])) {
	echo "Register Successfully.";
}
else
{
	echo "Registeration Failed!!";
}

}else{

	echo "Fields Cannot Blank!!";
}







 ?>