<?php 

$arr = ['10','2','5','23','45','1','6'];
for ($i=0; $i < count($arr); $i++) { 
	for ($j=$i+1; $j < count($arr); $j++) { 
		if ($arr[$i] > $arr[$j]) {
			$a = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $a;
		}
	}
}
for ($k=0; $k < count($arr); $k++) { 
	echo $arr[$k]."\n ";

}

 ?>