<?php 
$h=$_REQUEST['h'];
$ss=$_REQUEST['ss'];
$s=$_REQUEST['s'];
$e=$_REQUEST['e'];
$m=$_REQUEST['m'];

$sum=$h+$ss+$s+$e+$m;
$per=($sum*100)/500;
echo "Hindi :",$h,"<br>";
echo "English :",$e,"<br>";
echo "Social Science :",$ss,"<br>";
echo "Science :",$s,"<br>";
echo "Math :",$m,"<br>";
echo "Total Marks :",$sum,"<br>";
echo "Percentage :",$per,"<br>";
 ?>