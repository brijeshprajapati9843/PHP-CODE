<?php

// wap  in php to show the difference B/W null and undefined

$x='a';//memory
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));

printf('The Memory X =%d',memory_get_usage($x));

unset($x);
printf('The Memory X =%d',memory_get_usage($x));

$y;//no memory
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));

printf('The Memory Y =%d',memory_get_usage($y));

unset($y);
printf('The Memory Y =%d',memory_get_usage($y));


?>