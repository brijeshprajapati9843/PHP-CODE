<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/collection.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
	->addHeader('S.N')
    ->addHeader('Roll')
    ->addHeader('Name')
    ->addHeader('Marks')
	->addHeader('Class');
	
	$i=1;
	foreach($students as $student)
	{
	$table->addRow()
		->addColumn($i)
		->addColumn($student['roll'])
        ->addColumn($student['name'])
        ->addColumn($student['marks'])
        ->addColumn($student['class']);
$i++;
		}  
	
	
	
	$table->display();




?>