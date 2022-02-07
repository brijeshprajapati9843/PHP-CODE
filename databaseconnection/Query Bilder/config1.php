<?php 
#mysqli object oriended Approch
require_once __DIR__.'/connect.php';

Class DB{

	protected $DB;

	public function __construct(){
		global $conn;
		$this->DB = $conn;
	}
	public function getConnection(){
		return $this->DB;
	}
}

$db = new DB();
// print_r($db->getConnection());
 ?>