<?php 

$data = file_get_contents('student.json');
$data_Array = json_decode($data,true);
// echo "<pre>";
// print_r($data_Array);
$students = $data_Array['data'];
	
	echo "<table border='1' cellpadding='5px' width='100%' style = 'text-align:center'>
		<tr>
		<th>Roll NO</th>
		<th>Name</th>
		<th>Mark</th>
		<th>Class</th>
		</tr>";
	
foreach ($students as $key => $value) {
	// print_r($value['name']);
	echo "<tr>
		<td>{$value['roll']}</td>
		<td>{$value['name']}</td>
		<td>{$value['marks']}</td>
		<td>{$value['class']}</td>
		</tr>";
}
echo "</table>";







 ?>