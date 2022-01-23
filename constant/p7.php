<?php

// wap in php to show constants are global

printf("************START OF GLOBAL SCOPE************* \n");
define("name","brijesh");
//printf("%s",name);
$clss= "diploma";
function test(){
	printf("The value of Global Scope = %s \n",name); // constant is global
	printf("The Value Of Local Scope = %s \n",$class); // variable is local
}
test();



?>