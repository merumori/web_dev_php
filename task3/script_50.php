<?php
// Script 50 to filter the element of an array based on a specified condition using array_filter() function.
function Greater_number($value){
    return ($value>5);
}
$filter_elements= array(4,56,8,1,23,56,6,7,5);
echo " Before filter ";
print_r($filter_elements);
echo "<br> After filter ";
print_r(array_filter($filter_elements,"Greater_number"));
?>