<?php 
require_once __DIR__.'/DBConnection/query.php';

$id = $_POST['id'];
// echo $id;

$query = new Query();
if($query->delete('upload_image')->where('id',$id)->commit()){
    echo "<script>alert('Image Deleted Successfully.')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Image Cannot Deleted !!')</script>";
    echo "<script>window.location.href='delete.php'</script>";
}

 ?>