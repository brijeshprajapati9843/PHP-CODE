<?php 
$h=$_REQUEST['height'];
$w=$_REQUEST['width'];
$rect=$h*$w;
$peri=2*($h+$w);
echo "Length :",$h,"<br>";
echo "Width :",$w,"<br>";
echo "Area of Rectangle :",$rect,"<br>";
echo "Area of Perimeter :",$peri,"<br>";
 ?>