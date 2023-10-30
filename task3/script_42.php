<?php
//script 42 to find the difference between two  array using array_diff().
 
$Name=array("Pratik","Darshan","Parth","Upen");
$name2=array("Jeel","Vraj","Ajay");
 
echo "<br/>";
$intersection_value=array_diff($Name,$name2); 
print_r($intersection_value);

?>
