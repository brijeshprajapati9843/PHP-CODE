<?php 

$arr = ['1','10','30','2','3','40'];

// $max = $arr[0];
// // echo $max;
// for ($i=1; $i < count($arr) ; $i++) { 
// 	if ($arr[$i] > $max)  {
// 		$max = $arr[$i];
// 	}
// }
// echo $max;

function get_max($my_array){
	$n = count($my_array);
	$max_value = $my_array[0];
	for ($i=1; $i < $n; $i++) { 
		if ($my_array[$i] > $max_value) {
			$max_value = $my_array[$i];	
		}
	}
	return $max_value;
}
$my_array = ['1','10','30','2','3','40'];
echo "The Highest value of Array : ";
echo (get_max($my_array));
echo ("\n");

 ?>