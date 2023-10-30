<?php
//// Script 52 Merging an associative array using the array_merge() function.
$array1= array("N"=>"Mahesh",
                "A"=>21,
                "c"=>"MCA");
$array2 =array("Name"=>"Meru",
                "Age"=>22,
                "course"=>"MBA");
print_r(array_merge($array1,$array2));
?>
