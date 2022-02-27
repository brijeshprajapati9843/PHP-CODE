<?php 

include __DIR__.'/db.php';

$id = $_GET['id'];
// echo $id;
$query = "DELETE FROM task_tbl WHERE id = $id";
$run = mysqli_query($conn,$query);
if ($run) {
    echo "<script>alert('Record Deleted Successfully.')</script>";
    echo "<script>location.href = 'show.php'</script>";

}
 ?>