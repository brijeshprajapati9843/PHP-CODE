<?php
//wap in PHP to connect Array of Object to Associative Array

$json = file_get_contents(__DIR__.'/simple.json');
$data_Array = json_decode($json,true);
$data = $data_Array['web-app']['servlet'];
echo "<pre>";
// print_r($data);
	echo "<table border='1' cellpadding='10px'>";
	echo "<tr>";
	echo "<th>Servlet Name</th>";
	echo "<th>Servlet Class</th>";
	echo "<th>init param</th>";
	echo "</tr>";
foreach ($data as $data_key => $data_value) {
	// echo $data_key."<br>";
	foreach ($data_value as $servlet_value) {
		// print_r($servlet_value['servlet-name']);

		echo "<tr>";
		echo "<td>{$data_value["servlet-name"]}</td>";
		echo "<td>{$data_value["servlet-class"]}</td>";
		
		if (@is_array($data_value["init-param"]) and array_key_exists('init-param',$data_value)) {
			echo "<td>";
			echo "<table>";
			foreach ($data_value["init-param"] as $init_key => $init_value) {
				echo "<tr>";
				echo "<th>{$init_key}</th>";
				echo "<td>{$init_value}</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "</td>";
		}else{
			echo "<td>NA</td>";
		}
		echo "</tr>";
		
	}

}
echo "</table>";

?>
 