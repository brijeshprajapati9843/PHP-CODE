<?php

#step 1 : make connection
include __DIR__.'/dbconnect.php';

#step 2 : prepare the Query

$id = readline('Enter userid :');

$sql = "select * from student where id = '{$id}'";

#step 3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){
	echo name;
}
else{
	echo 'Database Connection Failed'.mysqli_error($conn);
}
?>