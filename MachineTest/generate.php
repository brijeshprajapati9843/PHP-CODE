<?php 
//0-100 -->2Rs/unit
//101-200 -->4Rs/unit
//201-300 -->6Rs/unit
//301-400 -->8Rs/unit



$bill = $_POST['bill'];
// $firstRange = 2;
// $divide = 1;

$firstRange = 2;

if ($bill==200) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;

	echo $res1+$res2;
}
else if ($bill==100) {
	$res1 = 100*$firstRange;
	echo $res1;
}
else if ($bill==50) {
	$res1 = 50*$firstRange;
	echo $res1;
}

else if ($bill==300) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res3 = 100*$firstRange;

	echo $res1+$res2+$res3;
}
else if ($bill==400) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res3 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res4 = 100*$firstRange;

	echo $res1+$res2+$res3+$res4;
}
else if ($bill==500) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res3 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res4 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res5 = 100*$firstRange;

	echo $res1+$res2+$res3+$res4+$res5;
}
else if ($bill==600) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res3 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res4 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res5 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res6 = 100*$firstRange;

	echo $res1+$res2+$res3+$res4+$res5+$res6;
}
else if ($bill==700) {
	$res1 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res2 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res3 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res4 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res5 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res6 = 100*$firstRange;
	$firstRange = $firstRange+2;
	$res7 = 100*$firstRange;

	echo $res1+$res2+$res3+$res4+$res5+$res6+$res7;
}






 ?>