<?php
//wap in php to show setter and getter

class User{

  public $name;
  public $class;
  public $rollno;
  public $sub;
  public function create($name,$class,$rollno,$sub){
    $this->name = $name;
    $this->class = $class;
    $this->rollno = $rollno;
    $this->sub = $sub;
  }
  public function getName(){
    return $this->name;
  }
  public function getClass(){
    return $this->class;
  }
  public function getRollno(){
    return $this->rollno;
  }
  public function getSub(){
    return $this->sub;
  }
  public function UserInfo(){
    echo "User Name : {$this->name} \n";
    echo "User Class : {$this->class} \n";
    echo "User rollno : {$this->rollno} \n";
    echo "User Subject : ".implode(',',$this->sub)." \n";
  }

}
$user = new User();
$user->create('Brijesh','Diploma','1001',['PHP','JAVASCRIPT','CSS','HTML']);
echo "User Name from getter : {$user->getName()} \n";
echo "User Class from getter : {$user->getClass()} \n";
echo "User rollno from getter : {$user->getRollno()} \n";
echo "User Subject from getter : ".implode(',',$user->getSub())." \n";

// $user->getName();
// $user->getClass();
// $user->getRollno();
// $user->getSub();
$user->UserInfo();

 ?>
