<?php
$conn = mysqli_connect("localhost","root","","brijesh");
if ($conn) {
  echo "Connection Successfully";
  echo "<br>";
}
else {
  echo "Connection Failed".mysqli_connect_error();
}
$serial = $_POST['serial'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$db_insert = "INSERT INTO student(Serial_no,st_name,st_roll) VALUES('$serial','$name','$roll')";
$run = mysqli_query($conn,$db_insert);
if ($run) {
  echo "Data INSERT";
}
else {
  echo "Data not INSERT".mysqli_error($conn);
}


$select = "SELECT * FROM student";
$result = mysqli_query($conn,$select);
        echo "<table>
        <tr>
        <th>Serial No</th>
        <th> Name</th>
        <th> Roll No</th>
        </tr>";
if (mysqli_num_rows($result)>0) {
   while ($rows =mysqli_fetch_assoc($result)) {
     echo "<tr>
     <td>".$rows['serial_no']." </td>
     <td>".$rows['st_name']." </td>
     <td>".$rows['st_roll']." </td>

     <tr>";
   }
   echo "</table>";
}
else {
  echo "rows is not found in table";
}
mysqli_close($conn);

?>
