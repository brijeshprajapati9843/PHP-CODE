<?php 
session_start();

$_SESSION['username'] = 'brijesh123';
$_SESSION['pass'] = '1234567';

// session_unset();
echo $_SESSION['username'];
echo $_SESSION['pass'];




 ?>