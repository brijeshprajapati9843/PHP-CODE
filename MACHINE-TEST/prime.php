<?php 

function get_num($num){
	if ($num == 1) {
		return 0;
	}
	for ($i=2; $i <$num/2; $i++) { 
		if ($num % $i == 0) {
			return 0;
		}
		return 1;
	}
}
$num = readline("Enter Number : ");
$check_prime = get_num($num);
if ($check_prime == 1) {
	echo "Prime Number";
}else{
	echo "This number is not Prime";
}


 ?>