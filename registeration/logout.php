<?php 

include_once __DIR__.'/functions.php';

session_start();

session_destroy();

header("location:".url("login.php"));






 ?>