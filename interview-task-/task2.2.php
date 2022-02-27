<?php 

require __DIR__.'/conn.php';
//2.	Print total sc amount using loop 
$query = "SELECT SC_AMOUNT FROM tbl_name ";  

$res = mysqli_query($conn,$query);
$data = 0;
while($row = mysqli_fetch_assoc($res)){

    $data = $data + $row['SC_AMOUNT'];
}
print_r($data);

?>