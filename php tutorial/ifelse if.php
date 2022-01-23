<?php
$per = 90;

if($per >= 80 && $per <= 100){
  echo "You are Merit. ";
}
elseif ($per >=60 && $per < 80) {
  // code...
  echo "You are Ist Division";
}
elseif ($per >=45 && $per < 60) {
  // code...
    echo "You are IIst Division";
}
elseif ($per >=33 && $per < 45) {
  // code...
    echo "You are IIIst Division";
}
elseif (  $per < 33) {
  // code...
    echo "You are Fail";
  }
  else {

    echo "Please Enter The Valid Percentage ";
  }

 ?>
