<?php 

$str_data = file_get_contents("data.json");
$data = json_decode($str_data, true);
 


foreach($data as $records){


    print_r($records);
}


?>