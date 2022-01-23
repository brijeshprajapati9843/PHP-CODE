<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <?php
       $conn = mysqli_connect("localhost","root","","updatetest") or die("Connection Failed.");

      $sql = "SELECT * FROM st_update  ";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessfully.");

      if(mysqli_num_rows($result) > 0){
    ?>
      <table cellpadding="7px" border="1" align="center" >
          <thead bgcolor="yellow">
          <th>Student Id</th>
          <th>Student Name</th>
          <th>Father's name</th>
          <th>Mother's name</th>
          <th>Student Address</th>
          <th>Action</th>
          </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_assoc($result)) {
             ?>
              <tr>
                  <td><?php echo $row['sid'];?></td>
                  <td><?php echo $row['sname'];?></td>
                  <td><?php echo $row['fname'];?></td>
                  <td><?php echo $row['mname'];?></td>
                  <td><?php echo $row['saddress'];?></td>
                  <td>
                      <a href='1.php?id=<?php echo $row['sid'];?>'>Edit</a>

                  </td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
    <?php } ?>
  </body>
</html>
