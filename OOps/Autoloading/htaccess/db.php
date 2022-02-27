<?php 

ob_clean(); // cleaned the output Buffer of header.php
// echo '<pre>';
// print_r($_SERVER);
$conn = mysqli_connect(
    $_SERVER['DB_HOST'],
    $_SERVER['DB_USER'],
    $_SERVER['DB_PASSWORD'],
    $_SERVER['DB_NAME']
);
echo '<pre>';
print_r($conn);

exit(); // Terminate this script so that footer cannot run here


 ?>