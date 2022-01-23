<?php 
$r=$_REQUEST['radius'];
$area=(22*$r*$r)/7;
$c=(2*22*$r)/7;
echo "Raduis :",$r,"<br>";
printf( "Area of Circle %.2f:",$area,"<br>");
echo "<br>";
printf ("Cirumference of Circle: %.2f",$c,"<br>");
 ?>