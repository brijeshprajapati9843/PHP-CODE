<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
	->addHeader('S.N')
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
	->addHeader('Class');
	
	$i=1;
	foreach($records as $record)
	{
	$table->addRow()
		->addColumn($i)
		->addColumn($record['id'])
        ->addColumn($record['Name'])
        ->addColumn($record['email'])
        ->addColumn($record['class']);
$i++;
		}  
	
	
	
	$table->display();




?>