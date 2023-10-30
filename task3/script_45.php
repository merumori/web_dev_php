<?php
//script 45 to flip the keys and values of array using array_flip().
 
$Name=array("Mca"=>"Mahesh","Mba"=>"Het","Msc"=>"Harsh","Bca"=>"Karan");

$flip=array_flip($Name); 
print_r($flip);

?>
