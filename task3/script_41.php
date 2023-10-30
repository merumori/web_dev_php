<?php
//script 41 to find the intersection between two  array using array_intersect().
 
$Name=array("Mahesh","Abhi","Darshak","Darsh");
$name2=array("Smith","Parth","Neel");
 
echo "<br/>";
$intersection_value=array_intersect($Name,$name2); 
print_r($intersection_value);

?>
