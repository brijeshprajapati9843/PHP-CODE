<?php
$nameerror="";
if (isset($_POST['submit']))
{
  if (empty($_POST['name']))
   {
    $nameerror="Name is Required";
   }
else
  {
    $name=$_POST['name'];
    if (! preg_match("/^[a-zA-Z]*$/",$name))
    {
      $nameerror="Only Letter and white Allowed";
    }
  }
}
?>
<form action="firstback.php" method="POST">
Name:<input type="text" name="name">
<input type="submit" name="submit"/>
