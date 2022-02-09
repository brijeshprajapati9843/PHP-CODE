<?php 


include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-Bilder/updatequery.php';

session_start();

session_unset();

session_destroy();

header("location:".url("login.php"));

 ?>