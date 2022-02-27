 <?php 
$jsondata = file_get_contents('sample4.json');
$data = json_decode($jsondata,true);
// echo "<pre>";
// print_r($data);
$array_data = $data['people'];
// print_r($array_data);
echo "<table border='1' cellpadding='10px'>";
echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Gender</th>";
echo "<th>Age</th>";
echo "<th>Mobile</th>";
echo "</tr>";
foreach ($array_data as $key => $value) {

		echo "<tr>";
		
		echo "<td>{$value['firstName']}</td>";
		echo "<td>{$value['lastName']}</td>";
		echo "<td>{$value['gender']}</td>";
		echo "<td>{$value['age']}</td>";
		echo "<td>{$value['number']}</td>";
		echo "</tr>";
}
echo "</table>";
  ?>