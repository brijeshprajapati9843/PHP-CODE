<?php 
$p=$_REQUEST['rupees'];
$r=$_REQUEST['rate'];
$t=$_REQUEST['time'];
$si=($p*$r*$t)/100;
echo "Principal :",$p,"<br>";
echo "Rate :",$r,"<br>";
echo "Time :",$t,"<br>";

echo "simple intrest :",$si;
 ?>