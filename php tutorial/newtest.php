<!DOCTYPE>
<html>
<head>
  <style>
    .error{
            color="red";
          }
  </style>
</head>
<body>
<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "This field is required"
  }
  else {
     $name=test_input($_POST["name"])
  }
  if (empty($_POST["email"])) {
    $emailErr = "This field is required"
  }
  else {
     $email=test_input($_POST["email"])
     // format validation
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
  }
  if (empty($_POST["subject"])) {
    $subjectErr = "This field is required"
  }
  else {
     $subject=test_input($_POST["subject"])
  }
  if (empty($_POST["message"])) {
     $message = "";
  }else {
     $message = test_input($_POST["message"]);
  }
}

echo "<h1> Thanks you.... </h1>";
echo "<p>  Your given values </p>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $subject;
echo "<br>";

echo $message;

?>
  <p><span class = "error">* required field.</span></p>
</body>
</html>
