<?php
$originalArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


function filterCondition($value) {
    return ($value % 2 === 0); 
}
$filteredArray = array_filter($originalArray, 'filterCondition');
echo "Original array: " . implode(", ", $originalArray) . "<br>";
echo "Filtered array: " . implode(", ", $filteredArray);
?>
