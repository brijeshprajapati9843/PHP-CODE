<?php

//wap in php to shhow var to var reference

$x='_10';  //normal variable
$$x = 'Brijesh Prajapati'; // variable to variable reference
printf('Your Name is :%s',$_10);

echo PHP_EOL;

$y='ravi';
$$y = 200;
printf("The value of ravi = %s",$ravi);

echo PHP_EOL;

$student['name']='Brijesh Kumar';
$student['class']='Diploma';
$student['collage']='MPP gkp';

//echo $student['class'];

foreach($student as $key => $value)
{
	$$key=$value;
}
echo 'Name ='.$name;
echo PHP_EOL;
echo 'Class ='.$class;
echo PHP_EOL;
echo 'Collage ='.$collage;
echo PHP_EOL;

echo 'Without using variable to variable';

$car['name']='Maruti';
$car['class']='A class';
$car['price']='5.5 lakh';

extract($car);
printf("Car Name = %s\n",$name);
printf("Car class = %s\n",$class);
printf("Car price = %s\n",$price);



?>