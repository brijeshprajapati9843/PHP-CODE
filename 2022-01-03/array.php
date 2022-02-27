<?php 

// $arr = [
// "name"=>"brijesh",
// "Age"=>"20",
// "Class"=>"Deploma",
// "Mobile"=>"7524998203"];
// echo "<pre>";
// // print_r($arr);
// $json_data = json_encode($arr);

// print_r($json_data);

 $data = file_get_contents('student.json');
 $array_data = json_decode($data,true);
 echo "<pre>";
 
 // var_dump($array_data);
 $st_data = $array_data['data'];
 print_r($st_data);
 ?>