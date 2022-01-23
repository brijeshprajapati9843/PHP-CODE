<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">

          <?php
           $conn = mysqli_connect("localhost","root","","updatetest") or die("Connection Failed.");

          $stu_id = $_GET['id'];

          $sql = "SELECT * FROM st_update where sid = {$stu_id}";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessfully.");

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

              ?>

          <form action="up2.php" method="post">
					<div class="form-row ">



                <div class="form-group col-lg-12">
               <label for=" ">id</label>
               <input type="hidden" class="form-control" name="sid" id="sid" value="<?php echo $row['sid'];?>">
             </div>

              <div class="form-group col-lg-12">
               <label for=" ">student Name</label>
               <input type="text" class="form-control" name="sname" id="address" value="<?php echo $row['sname'];?>">
             </div>

						</div>
              <div class="form-group ">
							<label for=" ">Father Name</label>
							<input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['fname'];?>">
						</div>

						 <div class="form-group ">
							<label for=" ">Mother Name</label>
							<input type="text" class="form-control" name="mname" id="mname" value="<?php echo $row['mname'];?>">
						</div>


							<div class="form-group  ">
								<label for=" ">Address</label>
								<input type="address" class="form-control" name="saddress" id="saddress" value="<?php echo $row['saddress'];?>">
							</div>



                    	<div class="form-group">
                    	<input class="submit" type="submit" value="Update"/>
                    </div>
				</form>
        <?php
        }
      }
         ?>

</div>
        </div>
      </div>

    </div>



  <script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
  </body>
</html>
