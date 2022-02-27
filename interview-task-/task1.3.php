<?php 





$str_data = file_get_contents("data.json");
$data = json_decode($str_data, true);
 


foreach($data['web-app']['servlet'] as $records_1){


    print_r($records_1);
}

echo "<br><br>";


echo "Second array";



echo "<br><br>";
foreach($data['web-app'] as $records_2){


    print_r($records_2);
}






?>