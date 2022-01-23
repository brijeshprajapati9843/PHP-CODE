<?php 
$fnum=$_REQUEST['fnum'];
$lnum=$_REQUEST['lnum'];

$rem =$fnum/$lnum;
$val=(int)$rem;
$m=$fnum-$lnum*$val;

echo "First Number :",$fnum,"<br>";
echo "Second Number :".$lnum."<br>";
echo "Remainder :",$m,"<br>";
?>