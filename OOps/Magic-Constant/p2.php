<?php
//wap in php to constant : __FILE__

echo "file system path is :".__FILE__.PHP_EOL;
echo "file system path is :".dirname(dirname(__DIR__)).PHP_EOL;
echo "file system path is :".dirname(dirname(dirname(__DIR__))).PHP_EOL;
echo "file system path is :".__DIR__.PHP_EOL;

$laragon_path = dirname(dirname(dirname(__DIR__)));
echo $laragon_path;
echo "\n";
echo "Different path = ".$laragon_path."\\"."projects"."\\";

 ?>
