<?php
// Script 53 Removes duplicate values of an associative array using the array_unique() function.
$array1= array("N"=>"Mahesh",
                "A"=>21,
                "c"=>"MCA",
                "d"=>"MCA");
//Before array_unique() function
print_r($array1);
echo "  <br>
        After Using the function ";
print_r(array_unique($array1));

?>
