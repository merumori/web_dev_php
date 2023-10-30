<?php
//script 44 to extract values from associative array using array_values().
 
$Name=array("Mca"=>"Mahesh","Mba"=>"Priyank","Msc"=>"Yatin","Bca"=>"Renil");

$value=array_values($Name); 
print_r($value);

?>
