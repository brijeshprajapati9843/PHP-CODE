<?php

//error_reporting(E_NOTICE);
error_reporting(E_USER_NOTICE);

// wap in php to show , different B/W predefined error level and user-defined error level

printf("The value of true :%d \n",true);
printf("The value of true :%d \n",TRUE);
printf("true is Incase-sensitive constant :%d \n",(TRUE==1));
define("true",10,1);
printf("The value of true after redeclaration :%d \n",true);

?>