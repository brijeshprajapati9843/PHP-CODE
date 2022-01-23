<?php

// wap in php to show core PHP file

echo "This code is php code file";
echo PHP_EOL;

function test()
{
	echo 'This is function from core php file';
	echo PHP_EOL;
}
test();

class Test{
	public function display(){
		echo 'This is display method from Test class from core php file ';
		echo PHP_EOL;
	}
}
$test = new Test();
$test->display();

echo '<h1>This is HTML Heading Tags</h1>';


//optional closing
