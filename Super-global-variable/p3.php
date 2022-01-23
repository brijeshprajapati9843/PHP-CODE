<?php

// wap in php to check a array is Homohenous or Heterogenous
//wap in php to show argv is always Homohenous

print_r($argv);
function is_homo($array=[]){



	$key_type = getType($array[0]);
	for($i=0; $i<count($array); $i++){
		if($key_type===getType($array[$i])){

		}
		else
		{
			return false;
		}
	}
		return true;
}
var_dump(is_homo($argv));
var_dump(is_homo([10.2,20.5,"cvjdf","nvjfz"]));

?>