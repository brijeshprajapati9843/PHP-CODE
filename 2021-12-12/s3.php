<?php 
$fnum=$_REQUEST['fname'];
$lnum=$_REQUEST['lname'];
$sum=$fnum+$lnum;
$sub=$fnum-$lnum;
$mul=$fnum*$lnum;
$div=$fnum/$lnum;
echo 'Addition :',$sum,"<br>";
echo 'Subtraction :',$sub,"<br>";
echo 'Multiplication :',$mul,"<br>";
echo 'Division :',$div,"<br>";
 ?>