<?php

// wap in php to show userdefined procedural constants

//define('gravity',10);
define('project_name','My_App');
define('db_name','test_db');

// case senstive constants

define('gravity','lowercase');
define('GRAVITY','uppercase');
define('Gravity','Caplitase');
define('GrAvItY','Mixed');

echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAvItY;
echo PHP_EOL;

echo project_name;
echo PHP_EOL;
echo db_name;
?>