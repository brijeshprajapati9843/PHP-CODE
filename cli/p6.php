<?php
$no1=readline('Enter the no 1 :');
$no2=readline('Enter the no 2 : ');



function add($no1=0,$no2=0)
{
return $no1+$no2;
}

printf("the result with 0 Asrgument = %d \n",add());
printf("the result with 1 Asrgument $no1 = %d \n",add($no1));
printf("the result with 2 Asrgument $no2 = %d \n",add($no2 ));
printf("the result with 3 Asrgument = %d \n",add($no1,$no2));
?>