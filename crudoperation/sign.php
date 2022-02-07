<?php 
include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

$name = post('name');
$pass = post('password');


$query = new Query();

$records = $query->select('user','pass')->table('login')->where(['user'=>$name , 'pass'=>$pass])->allRecords();

// $user = $query->select('user')->table('login')->first();
// $password = $query->select('pass')->table('login')->first();

if ($name==$user->user && $pass == $password->pass) {
	header("location:".url("index.php"));
	echo "Welcome :- {$user->user}";
}else
{
	echo "<script>alert('Username or Password incorr...');</script>";
}


// print_r($user->user);




 ?>