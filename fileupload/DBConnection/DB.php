<?php

//mysqli Object Oriented Approach
require_once __DIR__.'/dbconnection.php';

class DB{
	
	protected $DB;
	
	public function __construct(){
		global $conn;
		$this->DB = $conn;
		// echo "<pre>";
		// print_r($conn);
	}
	
	public function getConnection(){
		return $this->DB;
	}
	
}

$db = new DB();
// echo "<pre>";
// print_r($db->getConnection());
