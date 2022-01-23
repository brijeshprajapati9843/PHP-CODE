<html>
<body>

Your First Name: <?php echo $_POST["fname"]; ?><br>
Your Last Name: <?php echo $_POST["lname"]; ?><br>
Your Email address: <?php echo $_POST["email"]; ?><br>
Your Mobile No: <?php echo $_POST["phone"]; ?><br>
Gender <?php echo $_POST["gender"]; ?><br>
Your DOB: <?php echo $_POST["dob"]; ?><br>
Your Address: <?php echo $_POST["address"]; ?><br>
password <?php echo $_POST["passs"]; ?><br>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>


</body>
</html>
