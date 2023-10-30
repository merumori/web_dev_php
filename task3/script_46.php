<?php
//script 46 to fill an array with a specific value of an  array using array_fill().
 
$Name=array("Mahesh","Ajay","Bhavin","Kaushik");

$Name=array_fill(5,1,"Ajay"); 
print_r($Name);

?>
