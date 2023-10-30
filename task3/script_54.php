<?php
//// Script 54 extracts specific column from multidimensional array using the array_column() function.
$array1= array(array("Name"=>"Mahesh","Age"=>21,"course"=>"MCA"),
array("Name"=>"Daksh","Age"=>21,"course"=>"Msc"));
print_r(array_column($array1,"Name"));
?>
