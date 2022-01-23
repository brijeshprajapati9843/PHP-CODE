<?php 
$fnum=$_REQUEST['fnum'];
$lnum=$_REQUEST['lnum'];
$rem=$fnum%$lnum;
echo "First Number :",$fnum,"<br>";
echo "Second Number :",$lnum,"<br>";
echo "Remainder :",$rem,"<br>";
 ?>