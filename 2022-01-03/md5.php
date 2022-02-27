<?php 

$str = "brijesh";
$true = "True = ".md5($str,TRUE);
$false = "False = ".md5($str);

echo "$true";
echo "<br>";
echo "$false";
 ?>


Mobile = ^((\+){1}91){1}[1-9]{1}[0-9]{9}$

Email = "^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$"

Name = ^[a-zA-Z\s]+$

Username = ^[a-zA-Z0-9\s]+$