<?php 

$str_data = file_get_contents("data.json");
$data = json_decode($str_data, true);
 
/*Initializing temp variable to design table dynamically*/
$temp = "<table border='2'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp .= "<tr><th>configGlossary:installationAt</th>";
$temp .= "<th>configGlossary:adminEmail</th>";
$temp .= "<th>Company</th>";
$temp .= "<th>Mobile Number</th></tr>";
 
/*Dynamically generating rows & columns*/
foreach($data['web-app']['servlet'] as $records)
{
$temp .= "<tr>";
$temp .= "<td>" . $records["servlet-name"] . "</td>";
$temp .= "<td>" . $records["servlet-class"]."</td>";
$temp .= "<td>" . $records["init-param"]. "</td>";
$temp .= "<td>" . $records["init-param"]['configGlossary:installationAt'] . "</td>";
$temp .= "</tr>";
}
 
/*End tag of table*/
$temp .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp;
?>
