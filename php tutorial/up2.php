<?php
// echo "<h1>update success</h1>";

$stu_id =$_POST['sid'];
$stu_name = $_POST['sname'];
$f_name = $_POST['fname'];
$m_name = $_POST['mname'];
$stu_address =$_POST['saddress'];


 $conn = mysqli_connect("localhost","root","","updatetest") or die("Connection Failed.");

$sql = "UPDATE st_update SET sname = '{$stu_name}',fname = '{$f_name}',mname = '{$m_name}' ,saddress = '{$stu_address}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfully.");

header("Location:http://localhost/php tutorial/ed.php");

mysqli_close($conn);
?>
