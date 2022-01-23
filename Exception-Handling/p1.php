<?php
//wap in php to show Exception Handling 
$x=readline('Enter the number 1 : ');

$y=readline('Enter the number 2 : ');

$res=0;
try{
echo "Block of Try Started \n";
if($y==0)
{
throw new Exception;
}
else
{
$res = $x/$y;
}

echo "Block of Try Ended \n";

}catch(Exception $e){
echo "Some Exception Raised \n".$e ->getMessage();
}
finally{
echo "Finally Block will be Execute \n";
echo "The Result  = $res \n";
}
?>