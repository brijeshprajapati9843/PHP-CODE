<?php 
include_once __DIR__.'/query.php';

$name = $_POST['name'];
$email = $_POST['email'];

$query = new Query();
if($query->insert('student',[
'name'=>$name,
'email'=>$email
])){

 echo "Successfully inserted.";
}
 ?>

